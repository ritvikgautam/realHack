
<html>
	<head>
		<meta charset="utf-8">
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
                        <a href="ques.php">Find me a Locality!</a>
                    </li>
                    <?php if ($_SESSION['FBID']): ?> 
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
	</body>
</html>