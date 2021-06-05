<?php 
include "./includes/header.php";
?>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="LoginPage">
    <!-- <link rel="stylesheet" type="text/css" href="css/testLogin.css"/> -->

  

    <h1 id="index-title"><?php  echo $message; ?></h1>

    <form id="main-content" action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
    <h1 style="text-align: center;">Sign in</h1>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-control-dark">Email address</label>
        <input type="email" name="EmailAddress" id="EmailAddress" aria-describedby="emailHelp" autocomplete="username">
    </div>
    <br/>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-control-dark">Password</label>
        <input type="password" name="Password" id="Password" autocomplete="current-password">
    </div>
  
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



</html>


<?php 

  if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $email = "";
        $password = "";
        $email_error = "";
        $password_error = "";
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        if(empty($_POST['EmailAddress'])){
            echo "Please enter a email.";
        } else if(empty($_POST['Password'])){
            echo "Please enter a password";
        } else {
            
        if($_POST['EmailAddress'] != "" && $_POST['Password'] != ""){
            
            $email = trim($_POST['EmailAddress']);
            $password = trim($_POST['Password']);

            // user_select($email);
            $user = pg_prepare($conn, "users_select", "SELECT * FROM testusers WHERE EmailAddress = $1");
            $result = pg_execute($conn, "users_select", array($email));
        
            // users_authenticate($email, $password);
            
	        if(pg_num_rows($result) == 1)
	        {
		        $user = pg_fetch_assoc($result, 0);
		        if(!$is_user = password_verify($_POST['Password'], $user["password"]))
		        {
			        // dump($user);
			        echo "This user is not authenticated ";
			        // header('Location:./dashboard.php');
			        // ob_flush();
		        }    
		        else
		        {
                    // This Should update the current logged in users enrolrole date to the current time 
			        // $date = date("y-m-d h:i:sa");
			        // $sql = "UPDATE testusers SET Enroldate = ".date('Y-m-d H-i-s')." WHERE EmailAddress = '$email' ";
			        // pg_query($conn, $sql);
                    $_SESSION['message'] = "You have logged in succesfully";
                    header("Location:./dashboard.php");
                }
	        } 
            // $_SESSION['message'] = "You logged in successfully";
            
        }

    }

}


include "./includes/footer.php";
?>
