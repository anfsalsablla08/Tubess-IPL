<?php include "init.php"; ?>
<?php if(isset($_SESSION['id'])): ?>
	<?php header("location:dashboard.php"); ?>
	<?php endif; ?>
<?php
if(isset($_POST['login'])){

	$data = [
		'email' 			=> $_POST['email'],
		'password' 			=> $_POST['password'],
		'email_error' 		=> '',
		'password_error' 	=> ''
	];

	if(empty($data['email'])){
		$data['email_error'] = "Email is required";
	}

	if(empty($data['password'])){
		$data['password_error'] = "Password is required";
	}

if(empty($data['email_error']) && empty($data['password_error'])){
	if($source->Query("SELECT * FROM users WHERE email = ?", [$data['email']])){
		if($source->CountRows() > 0){
			$row = $source->Single();
			$id = $row->id;
			$password = $row->password;
			$nama = $row->nama;
			if(password_verify($data['password'], $password)){
				$_SESSION['login_success'] = "Hi ".$nama . " You are successfully login";
				$_SESSION['id'] = $id;
				header("location:dashboard.php");
			} else {
				$data['password_error'] = "Password salah";
			}
		} else {
			$data['email_error'] = "Email salah";
		}
}	
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="login">
  
  <h2 class="login-header" style="background-color: #00cc99">Log In</h2>

  <form class="login-container" method="POST">
  	<?php 
  	if(isset($_SESSION['account_created'])):?>
  		<div class="success">
  			<?php echo $_SESSION['account_created']; ?>
  		</div>
  	<?php endif; ?>
  	<?php unset($_SESSION['account_created']); ?>

    <p><input type="email" name="email" placeholder="Email" value="<?php if(!empty($data['email'])): echo $data['email']; endif; ?>"></p>
    <div class="error">
    	<?php if(!empty($data['email_error'])): ?>
    		<?php echo $data['email_error']; ?>
    	<?php endif; ?>
    </div>
    <p><input type="password" name="password" placeholder="Password" value="<?php if(!empty($data['password'])): echo $data['password']; endif; ?>">
    <div class="error">
    	<?php if(!empty($data['password_error'])): ?>
    		<?php echo $data['password_error']; ?>
    	<?php endif; ?>
    </div>
    <p><input type="submit" name="login" value="Login" style="background-color: #00cc99;"></p>
    <p><a href="index.php">Create new account</a></p>
  </form>
</div>
</body>
</html>