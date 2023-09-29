<?php
require_once '../../blog/include/database.php';

// Database connection
$db = new Database('localhost', 'root', '', '1blog');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'fullname' => $_POST['fullname'],
        'email' => $_POST['email'],
        'Username' => $_POST['Username'],
        'password' => $_POST['password'],
    ];

    $table = 'users';

    $success = $db->insert($table, $data);

    if ($success) {
        echo "Registration successful!";
    } else {
        echo "Error in the registration!";
    }
}
require_once "../../blog/ClassAutoLoad.php";
$OBJ_Layout->headers($conf);
// Display registered users
$users = $db->getSelectAll('users');

if ($users) {
    echo "<h2>Registered Users</h2>";
    echo "<table border='1'>
            <tr>
                <th>Username</th>
                <th>Email</th>
            </tr>";

    foreach ($users as $user) {
        echo "<tr>
                <td>{$user['username']}</td>
                <td>{$user['email']}</td>
              </tr>";
    }

    echo "</table><br><br><br><br>";
}
$OBJ_Layout->footer($conf);
// Don't close the connection here
?>
