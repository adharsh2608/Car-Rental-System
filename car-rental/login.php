
<?php
include 'config.php';
session_start();

if(isset($_POST['register'])){
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $pwd = mysqli_real_escape_string($con,$_POST['pswd']); 
  $pwd = hash('sha256',$pwd);
  $uname = mysqli_real_escape_string($con,$_POST['txt']);


  
$sql = "INSERT INTO customer(uname, email, password) VALUES ('$uname','$email','$pwd')";
if ($con->query($sql) === TRUE) {
  
    header('location: login.php');
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}

if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($con, $_POST["email"]);
  $pwd = mysqli_real_escape_string($con, $_POST['pswd']);
  $pwd = hash('sha256', $pwd);
  $query = "SELECT * FROM customer WHERE email='$email' && password='$pwd'";
  $result = mysqli_query($con, $query);
  $num = mysqli_num_rows($result);


  
  if ($num == 1) {
	$row = $result -> fetch_assoc();
	$_SESSION['uname'] = $row['uname'];
    header('location:index.php');
  } else {
    echo '<script>alert("Wrong Credentials")</script>';
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
  <link rel="stylesheet" href="css/login.css">

<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="POST" action="">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button name="register">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form method="POST" action="">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button type="submit" name="login">Login</button>
				</form>
			</div>
	</div>
</body>
</html>


