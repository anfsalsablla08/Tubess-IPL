<?php 
  require "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="main">
    <div class="div-content">
      <h1>Register</h1>
    <div class="div-box">
      <form action="" method="post">
        <div>
          <label for="email">Email</label>
          <input type="email" name="email" id="email">
        </div>
        <div>
          <label for="password">Password</label>
          <input type="password" name="password" id="password">
        </div>
        <div>
          <input type="submit" name="submit" value="Register">
        </div>
        <label>Already Have an Account? <a href="login.php">Login</a></label>
      </form>

      <?php
          if(isset($_POST['submit'])){
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = mysqli_query($con, "SELECT email FROM users WHERE email='$email'");
            $count = mysqli_num_rows($query);

            if($count > 0){
              echo "Email sudah terdaftar";
            } else {
              $queryInsert = mysqli_query($con, "INSERT INTO users (email, password) VALUES ('$email', '$encryptedPassword')");

                if($queryInsert){
                  echo "Register Sukses";
                }
            }
          }
      ?>
    </div>
    </div>
  </div>
</body>
</html>