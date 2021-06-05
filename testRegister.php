<?php 

include "./includes/header.php";
?>

    <!-- <link rel="stylesheet" type="text/css" href="./css/Lcss.css"/> -->
<div class="regPage">
	<form class="main-content" action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
  <h1 style="text-align: center;">Registration</h1>
  		<div class="mb-3">
    	<label for="exampleInputEmail1" class="form-label">First Name</label>
    	<input type="input" class="regInput" name="FirstName" id="First_Name" aria-describedby="emailHelp">
   
  		</div>
    	<div class="mb-3">
   		 <label for="exampleInputEmail1" class="form-label">Last Name</label>
    	 <input type="input"  class="regInput" name="LastName" id="Last_Name" aria-describedby="emailHelp">
   
  		</div>
  		<div class="mb-3">
    	<label for="exampleInputEmail1" class="form-label">Email address</label>
    	<input type="email"  class="regInput"   name="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  		</div>
    	<div class="mb-3">
    	<label for="exampleInputPassword1" class="form-label">Password</label>
   		 <input type="password"  class="regInput" name="pass">
 		 </div>


  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

</div>

<?php 

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    $email = "";
    $password = "";
    $first_name = "";
    $last_name = "";
}elseif($_SERVER["REQUEST_METHOD"] == "POST"){
  
  if(empty($_POST['FirstName'])){

    echo "<p> You need to enter a first name</p>";

  }else if (is_numeric($_POST['FirstName'])){
    
    echo "<p> Your First Name cant be a number </p>";
  
  }else if (empty($_POST['LastName'])){
    
    echo "<p> You need to enter a last name</p>";
  
  }else if (is_numeric($_POST['LastName'])){
    
    echo "<p> Your Last Name cant be a number </p>";
  
  }else if (empty($_POST['Email'])){
  
    echo "<p> You need to enter a email address</p>";
  
  }else if (empty($_POST['pass'])){
  
    echo "<p> You need to enter a password</p>";
  
  }else if($_POST['FirstName'] > MAX_FIRST_NAME_LENGTH || is_numeric($_POST['FirstName'])){
  
    echo "<p>Your First name cannot be more than 20 letters and cant be a number. </p>";
  
  }else if($_POST['LastName'] > MAX_LAST_NAME_LENGTH || is_numeric($_POST['LastName'])){
  
    echo "<p>Your Last name cannot be more than 20 letters and cant be a number. </p>";
  
  }else {
	
    $email = trim($_POST['Email']);
    $password = trim($_POST['pass']);
    $first_name = trim($_POST['FirstName']);
    $last_name = trim($_POST['LastName']);
    $last_enrole = date("Y-m-d",time());


    $hashPassword = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO testusers(EmailAddress, password, FirstName, LastName, LastAccess, EnrolDate) VALUES('$email', '$hashPassword', '$first_name', '$last_name', '$last_enrole', '$last_enrole')";
    $set = pg_query($conn, $sql);

    if($set){
      echo "<h1>User Has beeen successfully added</h1>";
      header("Location:./testLogin.php");
    }else{
      echo "<h1>Something went wrong</h1>";
    }
  }
  //Check if email is an email

  



}

?>
