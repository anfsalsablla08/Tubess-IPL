<?php 
include "init.php";
if(isset($_SESSION['id'])){
  header("location:dashboard.php");
}
if (isset($_POST['signup'])) {
  
    $data = [
        'nama' => $_POST['nama'],
        'no_induk' => $_POST['no_induk'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'confirm_password' => $_POST['confirm'],
        'nama_error' => '',
        'no_induk_error' => '',
        'email_error' => '',
        'password_error' => '',
        'confirm_error' => ''


    ];  

    if(empty($data['nama'])){
      $data['nama_error'] = "Nama tidak boleh kosong";
    }

    if(empty($data['no_induk'])){
      $data['no_induk_error'] = "NIM is required";
    } else {
      if($source->Query("SELECT * FROM users WHERE no_induk = ?", [$data['no_induk']])){
        if($source->CountRows() > 0 ){
          $data['no_induk_error'] = "NIM already exist";
        }
      }
    }

    if(empty($data['email'])){
      $data['email_error'] = "EMAIL is required";
    } else {
      if($source->Query("SELECT * FROM users WHERE email = ?", [$data['email']])){
        if($source->CountRows() > 0 ){
          $data['email_error'] = "Email already exist";
        }
      }
    }

    if(empty($data['password'])){
      $data['password_error'] = "Password is required";
    } else if(strlen($data['password']) < 5){
      $data['password_error'] = "Password sangat pendek";
    }

    if(empty($data['confirm_password'])){
      $data['confirm_error'] = "Confirm Password is required";
    } else if($data['password'] != $data['confirm_password']){
      $data['confirm_error'] = "Password not match";
    }

    if(empty($data['nama_error']) && empty($data['no_induk_error']) && empty($data['email_error']) && empty($data['password_error']) && empty($data['confirm_error'])){

      $password = password_hash($data['password'], PASSWORD_DEFAULT);
      if($source->Query("INSERT INTO users (nama,no_induk,email,password) VALUES (?,?,?,?)", [$data[
        'nama'], $data['no_induk'], $data['email'], $password])){

      $_SESSION['account_created'] = "Your account is successfully created";

      header("location:login.php");
      }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
  <div class="login">
  <h2 class="login-header" style="background-color: #00cc99;">Sign Up</h2>

  <form class="login-container" method="POST">
    <p><input type="text" name="nama" placeholder="Nama" value="<?php if(!empty($data['nama'])): echo $data['nama']; endif; ?>"></p>
    <div class="error">
      <?php if(!empty($data['nama_error'])): ?>
        <?php echo $data['nama_error']; ?>
      <?php endif; ?>
    </div>
    <p><input type="text" name="no_induk" placeholder="Nomor Induk" value="<?php if(!empty($data['no_induk'])): echo $data['no_induk']; endif; ?>"></p>
    <div class="error">
      <?php if(!empty($data['no_induk_error'])): ?>
        <?php echo $data['no_induk_error']; ?>
      <?php endif; ?>
    </div>
    <p><input type="email" name="email" placeholder="Email" value="<?php if(!empty($data['email'])): echo $data['email']; endif; ?>"></p>
    <div class="error">
      <?php if(!empty($data['email_error'])): ?>
        <?php echo $data['email_error']; ?>
      <?php endif; ?>
    </div>
    <p><input type="password" name="password" placeholder="Password" value="<?php if(!empty($data['password'])): echo $data['password']; endif; ?>"></p>
    <div class="error">
      <?php if(!empty($data['password_error'])): ?>
        <?php echo $data['password_error']; ?>
      <?php endif; ?>
    </div>
    <p><input type="password" name="confirm" placeholder="Confirm Password" value="<?php if(!empty($data['confirm_password'])): echo $data['confirm_password']; endif; ?>"></p>
    <div class="error">
      <?php if(!empty($data['confirm_error'])): ?>
        <?php echo $data['confirm_error']; ?>
      <?php endif; ?>
    </div>
    <p><input type="submit" name="signup" value="Create Account" style="background-color: #00cc99;"></p>
    <p><a href="login.php">Already have an account?</a></p>
  </form>
</div>
</body>
</html>