<!doctype html>
<html lang="en">
  <head>
  	<?php  
	/*Jermaine Henry
	Sept 22/2020
	WEBD3201*/
		session_start();
		ob_start();
		require("./includes/constants.php");
		require("./includes/testDB.php");	
		require("./includes/functions.php");
		
		// $message = isset($_SESSION['message'])?$_SESSION['message']:""; // conditional operator 
		$message = "";
        if(isset($_SESSION['message']))
        {
            $message = $_SESSION['message'];
            unset($_SESSION['message']);
        }
	
		
	?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Demo Age Title</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="./css/Lcss.css"/>

  </head>
  
  <body>
    <nav >
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
        <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link active" href="./testRegister.php">Register</a>
        </li>
        <li class="nav-item">
                <a class="nav-link active" href="./dashboard.php">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
        </li>
                 <li class="nav-item text-nowrap">
            <a class="nav-link active" href="./testLogin.php">Sign-in</a>
        </li>
        </ul>
    </nav>



 