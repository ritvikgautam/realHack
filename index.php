<?php
session_start(); 
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Login with Facebook</title>
<link href="bootstrap.min.css" rel="stylesheet"> 
    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">
        <link href="assets/css/font-awesome.css" rel="stylesheet">
            <link href="bootstrap-social.css" rel="stylesheet" >


 </head>
  <body>




  <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->


 <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Real Hack</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="que.php">Find me a place!</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </div>




<div class="container">
<div class="hero-unit">
  <h1>Hello, <?php echo $_SESSION['FULLNAME']; ?>!</h1>
  </div>


  <!--
<div class="span4">
 <ul class="nav nav-list">
<li class="nav-header">Image</li>
	<li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
<li class="nav-header">Facebook ID</li>
<li><?php echo  $_SESSION['FBID']; ?></li>
<li class="nav-header">Facebook fullname</li>
<li><?php echo $_SESSION['FULLNAME']; ?></li>
<li class="nav-header">Age</li>
<li><?php echo $_SESSION['AGE']; ?></li>
<li class="nav-header">Gender</li>
<li><?php echo $_SESSION['GENDER']; ?></li>
-->

<a class="btn btn-social btn-facebook" href="logout.php">
    <i class="fa fa-facebook"></i> Logout
  </a>
</ul></div></div>




    <?php else: ?>     <!-- Before login --> 


 <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Real Hack</h3>
        <nav>
          <ul class="nav nav-justified">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Login</a></li>
          </ul>
        </nav>
      </div>



<div class="container">
<div><br><br><br>
<a class="btn btn-social btn-facebook" href="fbconfig.php">
    <i class="fa fa-facebook"></i> Sign in with Facebook
  </a>
      </div>
    <?php endif ?>
  </body>
</html>
