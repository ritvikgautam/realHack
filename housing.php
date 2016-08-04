<?php
	session_start();
	function enter_db($list){
		$age = $_SESSION['AGE'];
		if($age >= 18 || $age <= 25)
		{
			$agec = 1;
		}
		elseif ($age > 25 || $age <=40) 
		{
			$agec = 2;
		}
		elseif ($age > 40 || $age <= 60)
		{
			$agec = 3;
		}
		elseif ($age > 60)
		{
			$agec = 4;
		}

		$query = "INSERT INTO 'age_rec' VALUES('".$agec."','".$list."')";
		$servername = "localhost";
		$susername = "root";
		$spassword = "123456";
		$dbname = "realhack";
		$conn = mysql_connect($servername, $susername, $spassword);
		mysql_select_db($dbname, $conn);

		mysql_query($query);
	}
?>

<html>
	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Check Localities</title>

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
<center>
    <table>
    		<?php
    			$listarr = $_SESSION['final'];
    			foreach($listarr as $list)
    			{
    				enter_db($list);

    		echo '<tr><td> '.$list;
    		echo '</td>
    		<td><a href = "https://housing.com/in/rent/text-search?text='.$list.'" target="_blank"><button class="btn btn-group btn-group-lg">'.$list.'</button></a>
    		</td></tr><br>';
    		}
    	?>
    </table>
</center>
	</body>
</html>