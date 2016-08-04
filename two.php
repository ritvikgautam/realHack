<?php
    session_start();
    if (!$_SESSION['FBID'])
    {
        header("Location: fbconfig.php");
    }

?>
<!DOCTYPE html>
<html>
	<head><meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Find me a Locality!</title>

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
	</head>

	<body>

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
                <a class="navbar-brand" href="home.php"></a>
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




        
        <div class="container">
		
		<form action="selectedProblemDisplay.php" method="post">
		
            
        
			
           
            <br><br>
 
        <!--Details Section-->
            <div class="row" id="diseaseCategory">    
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                
                            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="extraTab" class="nav nav-tabs" role="tablist">
                                    
                                    <li role="a" class="active">
                                        <a href="#a" role="tab" id="a-tab" data-toggle="tab" aria-controls="a" aria-expanded="true">Begin</a>
                                    </li>
                                    
                                    <li role="b">
                                        <a href="#b" role="tab" id="b-tab" data-toggle="tab" aria-controls="b">>></a>
                                    </li>
                                    
                                    <li role="c">
                                        <a href="#c" role="tab" id="c-tab" data-toggle="tab" aria-controls="c">>></a>
                                    </li>
                                    
                                    <li role="d">
                                        <a href="#d" role="tab" id="d-tab" data-toggle="tab" aria-controls="d">>></a>
                                    </li>
                                    
                                    <li role="e">
                                        <a href="#e" role="tab" id="e-tab" data-toggle="tab" aria-controls="e">>></a>
                                    </li>

                                    <li role="f">
                                        <a href="#f" role="tab" id="f-tab" data-toggle="tab" aria-controls="f">>></a>
                                    </li>

                                    <li role="g">
                                        <a href="#g" role="tab" id="g-tab" data-toggle="tab" aria-controls="g">Finish</a>
                                    </li>
                                    <li role="h"><br><br>   
                                       <div class="form-group">  
                                            <input type="submit" class="btn btn-danger col-lg-offset-10" value="Submit Form">
                                        </div>
                                    </li>
                                </ul>
                                

                                  <div id="myTabContent" class="tab-content">
                                    
                                    <div role="tabpanel" class="tab-pane fade in active" id="a" aria-labelledBy="a-tab">
                                        <div data-toggle="buttons"><br><br>
										<h1><center>Which city do you want to look into?</center></h1><br/><br/><br/><br/>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListA[]" value="bangalore">Bangalore</label>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="b" aria-labelledBy="b-tab">
                                        <div data-toggle="buttons"><br><br>
										<h1><center>What is your purpose?</center></h1>
                                            <br/><br/><br/><br/>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListB[]" value="buy">Buy</label>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListB[]" value="rent">Rent</label>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListB[]" value="pg">PG/Hostel</label>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListB[]" value="serviced">Serviced Apartments</label><br><br><br>
                                        </div>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="c" aria-labelledBy="c-tab">
                                        <div data-toggle="buttons"><br><br>
                                        <h1><center>Where are you most likely on a casual Saturday?</center></h1>
                                            <br/><br/><br/><br/>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListC[]" value="coffee">Coffee Shop</label>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListC[]" value="pub">Bar & Pub</label>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListC[]" value="fast+food">Fast Food</label><br><br><br>
                                        </div>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="d" aria-labelledBy="d-tab">
                                        <div data-toggle="buttons"><br><br>
										
										<h1><center>Do you have school going kids?</center></h1>
                                            <br/><br/><br/><br/>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListD[]" value="school">Yes</label>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListD[]" value="no">No</label><br><br><br>
                                        </div>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="e" aria-labelledBy="e-tab">
                                        <div data-toggle="buttons"><br><br>
                                        
                                        <h1><center>What kind of a person are you?</center></h1>
                                            <br/><br/><br/><br/>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListE[]" value="movie">Movies</label>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListE[]" value="theater">Theater</label>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListE[]" value="stadium">Sports</label>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListE[]" value="no">Neither</label><br><br><br>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="f" aria-labelledBy="f-tab">
                                        <div data-toggle="buttons"><br><br>
                                        
                                        <h1><center>Do you have any particular medical condition?</center></h1>
                                            <br/><br/><br/><br/>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListF[]" value="hospital">Yes</label>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListF[]" value="no">No</label><br><br><br>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="g" aria-labelledBy="g-tab">
                                        <div data-toggle="buttons"><br><br>
                                        
                                        <h1><center>Are you a shopaholic?</center></h1>
                                            <br/><br/><br/><br/>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListG[]" value="shopping">Yes</label>
                                            <label class="btn btn-default  col-lg-2 col-lg-offset-1">
                                            <input type="checkbox" name="diseaseListG[]" value="no">No</label><br><br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      
            </div>      <!--END Row-->
            </form>     <!--END Form-->
        </div>      <!--END Container-->
        
        		
		<script src = "js/jquery-1.11.2.js" ></script>
		<script src = "js/bootstrap.js" ></script>
	</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              