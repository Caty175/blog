<?php
   class contents{
       public function tables(){
           ?>
           <h1>Welcome to Admin Dashboard</h1>
  
 
  
  <main>
  
    <table class="authors-table">
      <caption>Authors</caption>
      <thead>
      <table border="2">
          <tr>
              <th>User ID</th>
              <th>Username</th>
              <th>Email</th>
              <th>Actions</th>
              
          </tr>
      </thead>
      <tbody>
        
        <?php
       
        $sql = "SELECT * FROM users ";
        $result = $mysqli->query($sql);
        

        if ($result->num_rows > 0) {
          // Loop through the user data and display it in the table
          while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["userId"] . "</td>";
              $userId = $row["userId"];
              $_SESSION[$userId] = $row["userId"];
              echo "<td>" . $row["User_Name"] . "</td>";
              echo "<td>" . $row["email"] . "</td>";

          ?>
          
            <td class="actions-cell">
    <a href="Edit_Authors.php?id=<?php echo $userId; ?>" class="edit-btn">Edit</a>
    <a href="delete_account.php?id=<?php echo $userId; ?>" class="delete-btn" onclick="return deleteAuthor(<?php echo $userId; ?>)">Delete</a>
</td>


<?php
echo "</tr>";
        }
      }
        ?>
      </tbody>
    </table>
    <label for="check" class="open-menu"><i class="fas fa-bars"></i> </label>
                <a href="export_user.php?type=excel" class="btn btn-dark rounded-0 py-3 px-5">Export Users to Excel</a>

    <br>
    <br>
  <br>
 <br>
<br>
    </div>
  </main>
  
  <script>
    function deleteAuthor(authorId) {
        if (confirm("Are you sure you want to delete this author?")) {
            window.location.href = "delete_author.php?id=" + authorId;
        }

    }
</script>


<?php
         }
         public function blogpost(){
             ?>
             <h1>Latest Articles <a href="edit_Article.php" class="btn btn-dark rounded-0 py-3 px-5">edit</a></h1>
             <section>
    <?php if ($result->num_rows > 0): ?>
        <ol>
            <?php while ($row = $result->fetch_assoc()): ?>
                <li>
                    <h3><?php echo $row['authorTitle']; ?></h3>
                    <p>Aritcles' ID <?php echo $row['authorId']; ?><br><?php echo $row['photo']; ?><br><?php echo $row['authorFullText']; ?></p>
                    <p class="publication-date">Publication Date: <?php echo $row['publication_date']; ?></p>
                </li>
                
            <?php endwhile; ?>
        </ol>
    <?php else: ?>
        <p>No articles found.</p>
    <?php endif; ?>
    
    </section>

    <?php
         }
         public function view_article($conf){
             ?>

<section class="blog-input-section">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
              <div class="content d-flex align-items-center bg-light">
                  <h1 class="text-center">View Articles</h1>

                  <form action="blogview.php" method="post" class="signin-form" enctype="multipart/form-data">
                      <div class="form-group mb-3">
                          <label for="userId">Author's Blog ID</label>
                          <input type="text" class="form-control" placeholder="Author ID" name="userId" required>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="form-control btn btn-primary rounded submit px-3">View Articles</button>
                      </div>
              </div>
          </div>
      </div>
      </div>
</section>

<?php
         }
         public function profile_setting_cnt(){
             ?>
             <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Settings</title>
    <style>
        /* Add your CSS styles here */
        /* For example, you can style the form and buttons */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        input[type="submit"],
        input[type="button"] {
            padding: 10px 20px;
            font-size: 16px;
        }

        .delete-account-button {
            background-color: #FF0000;
            color: #fff;
            border: none;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Profile Settings</h1>
    <form action="update_profile.php" method="post">
        <label for="userId">Your user ID:</label>
        <input type="text" name="userId" id="userId" required><br>
        <label for="currentPassword">Current Password:</label>
        <input type="password" name="passwordn" id="passwordn" required>
        <label for="newPassword">New Password:</label>
        <input type="password" name="newPassword" id="newPassword" required>
        <label for="confirmPassword">Confirm New Password:</label>
        <input type="password" name="confirmPassword" id="confirmPassword" required>
        <input type="submit" value="Update Password">
    </form>
    <form action="delete_account.php" method="post">
        <input type="button" class="delete-account-button" value="Delete Account" onclick="confirmDelete()">
    </form>

    <script>
        function confirmDelete() {
            if (confirm("Are you sure you want to delete your account? This action cannot be undone.")) {
                // Redirect to the delete_account.php script
                window.location.href = "delete_account.php";
            }
        }
    </script>
</body>
</html>


<?php
         }}
         ?>

             
