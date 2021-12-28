<?php
     session_start();
     if(!isset($_SESSION['uname'])){
          header('location: login.php');
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Car Rental Website </title>

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
                         
                   
                         </li>
                         <li><a href="contact.php">Contact Us</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Available Cars</h1>

                    <br>

                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, alias.</p>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/product-1-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 5</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="fleet.php">Large: Premium</a></h3>
                                   <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>

                              <div class="courses-info">
                              <a href="booking.php?img=images/product-1-720x480.jpg&name=Large: Premium"><button type="button" class="section-btn btn btn-primary btn-block">Book Now</button></a>
                              
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/product-2-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 5</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="fleet.php">Large: Station wagon</a></h3>
                                   <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>

                              <div class="courses-info">
                              <a href="booking.php?img=images/product-2-720x480.jpg&name=Large: Station wagon"><button type="button" class="section-btn btn btn-primary btn-block">Book Now</button></a>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/product-3-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 5</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="fleet.php">Medium: Low emission</a></h3>
                                   <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>

                              <div class="courses-info">
                              <a href="booking.php?img=images/product-3-720x480.jpg$name=Medium: Low emission"><button type="button" class="section-btn btn btn-primary btn-block">Book Now</button></a>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/product-4-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 4</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="fleet.php">Small: Economy</a></h3>
                                   <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>

                              <div class="courses-info">
                              <a href="booking.php?img=images/product-4-720x480.jpg&name=Small: Economy"><button type="button" class="section-btn btn btn-primary btn-block">Book Now</button></a>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/product-5-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 2</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 2</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 2</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> M</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="fleet.php">Small: Mini</a></h3>
                                   <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>

                              <div class="courses-info">
                              <a href="booking.php?img=images/product-5-720x480.jpg&name=Small: Mini"><button type="button" class="section-btn btn btn-primary btn-block">Book Now</button></a>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/product-6-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 5</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="fleet.php">Large: Premium</a></h3>
                                   <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>

                              <div class="courses-info">
                              <a href="booking.php?img=images/product-6-720x480.jpg&name=Large: Premium"><button type="button" class="section-btn btn btn-primary btn-block">Book Now</button></a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
</section>

</body>
</html>