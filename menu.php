<?php
session_start();
pg_connect("host=localhost user=postgres password=postgres dbname=dbrealestate");?>
<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Real Estate</a>
      <div class="phone"><span>Contact Us</span>8398958767</div>
    </div>
    
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php" class="page-scroll">Home</a></li>
         <?php
                            if($_SESSION['email']==null){
                                ?>
        <li><a href="register.php" class="page-scroll">SignUp</a></li>
        <li><a href="login.php" class="page-scroll">SignIn</a></li>
        <?php
                            } else{
                                ?>
        <li><a href="addproperty.php" class="page-scroll">AddProperty</a></li>
        <li><a href="welcome.php" class="page-scroll">Property</a></li>
        <li><a href="myproperty.php" class="page-scroll">Myproperty</a></li>
        <li><a href="logout.php" class="page-scroll">Logout</a></li>
        <li><a href="sentenquiries.php" class="page-scroll">Sent</a></li>
        <?php 
          }
          ?>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<br><br><br><br><br><br>