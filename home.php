<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Real-Hack</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/small-business.css" rel="stylesheet">
	 <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/another.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script type = "text/javascript">
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];
          }

          function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("img").src = images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 1500);
          }

	 function startTimer() {
              setInterval(displayNextImage, 1500);
          }

          var images = [], x = -1;
          images[0] = "h1.jpg";
          images[1] = "original.jpg";
          images[2] = "h3.jpg";
      </script>

</head>
<body onload = "startTimer()">

    <!-- Navigation -->
    <div class="brand"><span id="blue">Real Hack</span></div>
	<div class="container"><center><b><i>Where thou art-that-is home</i></b></center></div>
    <div class="address-bar" style="margin-top: -2%; margin-left: 12%; margin-bottom: 2%;"> 
		  
	</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" >
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="two.php">Find me a Locality</a>
                    </li>
                    <?php if ($_SESSION['FBID']): ?> 

                    <li>
                        <a href="">
                        Hi, <?php echo $_SESSION['FULLNAME']; ?>!
                    </a>
                    </li>
                    <li>
                        <!--<a href="blog.html">Login</a>-->
                        <a class="btn btn-social btn-facebook" href="logout.php">
                        <i class="fa fa-facebook"></i> Logout
                        </a>
                    </li>
                    <?php else: ?> 
                    <li>
                        <!--<a href="blog.html">Login</a>-->
                        <a class="btn btn-social btn-facebook" href="fbconfig.php">
                        <i class="fa fa-facebook"></i> Sign in with Facebook
                        </a>
                    </li>
                    <?php endif ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <br><br><br><br><br>
    <center><img src="http://cdn.flaticon.com/png/256/2144.png" width = "100" height = "100"></center>

	<?php /* ?>
    <!-- Page Content -->
    <div class="container">
       <div class="box">
        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                
            <div class="row" align = "center">
					<center><img id="img" src="h1.jpg"></center>
					
					<div class="abc"align="center"><font size="40px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8659;</font></center></div>
           <!--     <div class="col-lg-12 text-center">
                    <h2 class="section-heading">How It Works</h2>
                    <h3 class="section-subheading text-muted">This will tell you how we are proving you our services</h3>
                </div>-->
            </div>

            <div class="row text-center">
            <!--    <div class="col-md-4">
                    <span class="fa-stack fa-4x">
					     <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-users fa-stack-1x fa-inverse"></i>
                      
                    </span>
                    <h4 class="service-heading">Forum</h4>
                    <p class="text-muted">Provide a platform for patients to interact with other patients anonymously. Enable patients to contact their medical teams at any time</p>
                </div>
                <!--<div class="col-md-4">
                    <span class="fa-stack fa-4x">
                         <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-stethoscope fa-stack-1x fa-inverse"></i>
					</span>
                    <h4 class="service-heading">Keep An Eye</h4>
                    <p class="text-muted">Provide information about their specific clinical study in an easy to digest form. Bring the study to the patient</p>
                </div>-->
             <!--   <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Emergency!</h4>
                    <p class="text-muted">provide online portal to fill up their form ,when emergency is there.So that they dont have to stand in line and can quickly save their loveones life.</p>
                </div>-->
            </div>
     
            </div>
            <!-- /.col-md-8 -->
        <!--    <div class="col-md-4 text-center" style="border: solid black; border-radius: 15%; padding-right: 2%"><br>
                <h1>Med-Talk</h1><br><br>
                <p>Patient Engagement and Retention in order to get the best results out of clinical studies for the greater good.Patient Engagement and Retention in order to get the best results out of clinical studies for the greater good.</p><br>
                <a style="margin-bottom: 8%" class="btn btn-primary btn-lg" href="tour/main/tour.php">Tour!</a>
            </div>-->
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
		</div>

        <hr>

        <!-- Call to Action Well -->
		
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
				<center><font size="5px" color="gray">Select City<font><i></center>
               <div align = "center">
					<select class="element select large" id="element_2" name="element_2" style="top:514;width:350px;height:40px;"> 
					<option value="" selected="selected"></option>
				<option value="560100" >Electronic city</option>
			<option value="560101" >Koramangala</option>
			<option value="560102" >Jayanagar</option>
			<option value="560103" >Banshankri</option>
			
		
		</select>
		</div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
         <div class=box>
        <!-- Content Row -->
        <div class="row" id="bigger">
            <div  class="col-md-4">
			<a class="button rounder large" href="test.php">
						<img class="over" src="assets/img/1.png" height="60" alt=""/>
						<img class="under" src="assets/img/1.png" height="60" alt=""/>
						<span class="big-text">Rent</span>
						<span class="small-text">- house / room / flat</span>
					</a>
                
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                  <a class="button rounder large" href="emergencyForm.html">
						<img class="over" src="assets/img/2.png" height="60" alt=""/>
						<img class="under" src="assets/img/2.png" height="60" alt=""/>
						<span class="big-text">Buy</span>
						<span class="small-text">- house / land</span>
					</a>
          
           </div>
			<div class="col-md-4">
                <a class="button rounder large" href="formOnline.php">
					<img class="over" src="assets/img/3.png" height="60" alt=""/>
					<img class="under" src="assets/img/3.png" height="60" alt=""/>
					<span class="big-text">PG / Hostel</span>
					<span class="small-text">- a home away from home</span>
				</a>
          
            </div>
            <!-- /.col-md-4 -->
        </div>
        </div>
        <!-- /.row -->
 
        <!-- Footer -->
        <footer>
            <div class="box">
			  <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2015</p>
                </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
    <?php */ ?>
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	 <script src="http://code.jquery.com/jquery-2.1.3.min.js">//no code</script>


</body>

</html>
