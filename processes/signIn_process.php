<?php

if (empty($_POST["fullname"])) {
    die("Full Name is required");
}
if (empty($_POST["address"])) { // Change "addressn" to "address"
    die("Address is required");
}
if (empty($_POST["phoneNo"])) {
    die("Phone Number is required");
}
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}
if (empty($_POST["Username"])) {
    die("Username is required");
}
if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if (!preg_match("/[a-zA-Z]/", $_POST["password"])) { // Fixed the regex pattern
    die("Password must contain at least one letter");
}

if (!preg_match("/[0-9]/", $_POST["password"])) { // Change "passwordn" to "password"
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) { // Change "passwordn" to "password"
    die("Passwords must match");
}



   
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO users (fullname, address, phoneNo, Username, email, password) 
        VALUES (?, ?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssssss",
                  $_POST["fullname"],
                  $_POST["address"],
                  $_POST["phoneNo"],
                  $_POST["Username"],
                  $_POST["email"],
                  $password_hash);
                  
if ($stmt->execute()) {
    header("Location: trial.php");
    exit;
} else {
    if ($mysqli->errno === 1062) {
        die("Email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}
