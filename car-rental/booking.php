<?php
$img_url = $_GET['img']; 
$img_name = $_GET['name'];
include 'config.php';
session_start();
if (isset($_POST['order'])) {
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST["city"];
  $pin = $_POST["pin"];


  $sql = "INSERT INTO booking(phone, address, city, pin) VALUES ('$phone','$address','$city','$pin')";
  if ($con->query($sql) === TRUE) {
    $_SESSION['phone'] = $phone;
    echo '<script>alert("Booking Successful")</script>';
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Car Booking Website </title>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     


<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>

               <!-- lOGO TEXT HERE -->
               <a href="#" class="navbar-brand">Car Rental Website</a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="fleet.php">Available Cars</a></li>                              
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="logout.php">Logout</a></li>
               </ul>
          </div>

     </div>
</section>


<center><div class="container pt-5" >
      <div >
        <h1 class="sectionhead"><?php echo "$img_name" ?></h1>
        <img src=<?php echo "$img_url" ?> width="500" alt="">

      </div>
     
    </div>
    </center>

<section id="order-form">
    <div class="container p-5"> 
    <form method="POST" action="">
              <div class="mb-3">
                <label for="exampleInputContact" class="form-label">Phone number</label>
                <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">Provide your phone number for more info.</div>
              </div>
              <div class="mb-3">
                <label for="exampleCarName" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="exampleName" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">Enter your Address</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Pincode</label>
                <input type="text" name="pin" class="form-control" id="exampleInputPassword1" required>
              </div>
              <input type="submit" name="order" value="Confirm Booking" class="btn btn-primary" >
            </form>
    </div>
    
    </section>

    
</body>
</html>