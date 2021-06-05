<?php
/*
Jermaine Henry
Dec 17, 2020
WEBD3201
Index page for the labs to go back and forth from 
*/
include "./includes/header.php";
$title = "WEBD3201 HOME-PAGE";
$message = "Intro";
$message1 = "Welcome Page";

// determines that someone is not logged in 

//header ("Location:./testLogin.php");
//ob_flush();

header("Location:./testLogin.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" id="page1">
    <link rel="stylesheet" type="text/css" href="css/testLogin.css"/>


	<h1 id="index-title"><?php  echo $message; ?></h1>
	<body>
			
		<div id="main-content"> 
		<h2><?php  echo $message; ?></h2>
		<p class="lead">Click the Register button to sign-up or the login button to sign in.</p>

		<button id="sign-in-btn"><a href="testLogin.php">Login-in</a></button> 
	
		</div>
		<p class="lead">
    	<a href="#" class="btn btn-lg btn-secondary">Learn more</a>
		</p>


		</body>
		

</html>

<?php
include "./includes/footer.php";
?>    