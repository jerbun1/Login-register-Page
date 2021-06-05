<?php
function dump($arg){
	echo"<pre>";
	print_r($arg);
	echo"</pre>";
}

function db_connect(){
	return pg_connect("host=127.0.0.1 port=5432 dbname=testDB2 user=henryj password=100436241");
}

$conn = db_connect();
// // $user = pg_prepare($conn, "users_select", "SELECT * FROM testusers WHERE EmailAddress = $1 AND Password = $2");
// $user2 = pg_prepare($conn, "users_select2", "SELECT * FROM testusers WHERE EmailAddress = $1");
// $user3 = pg_prepare($conn, "users_select3", "SELECT * FROM testusers WHERE EmailAddress = $1");

// //register
// $regUser = pg_prepare($conn, "users_select4", "SELECT * FROM testusers WHERE EmailAddress = $1 AND Password = $2");


// $result2 = pg_execute($conn, "users_select2", array("DSchrute@dcmail.ca"));
// $result3 = pg_execute($conn, "users_select3", array("DSchrute@dcmail.ca"));

// //register
// $regResult = pg_execute($conn, "users_select4", array("",""));

// //These select statements are for the register page
// $reg = pg_prepare($conn,  "reg_check", "SELECT * FROM testusers WHERE EmailAddress = $1 ");
// $check_reg = pg_execute($conn, "reg_check", array(""));



	
	


// function users_authenticate($email, $password){
// 	global $conn;
// 	global $user; 
// 	global $result;
		

// 	if(pg_num_rows($result) == 1)
// 	{
// 		$user = pg_fetch_assoc($result, 0);
// 		if(!$is_user = password_verify($_POST['Password'], $user["password"]))
// 		{
// 			// dump($user);
// 			echo "This user is not authenticated ";
// 			// header('Location:./dashboard.php');
// 			// ob_flush();
// 		} 
// 		else
// 		{
// 			$date = date("Y-m-d",time());
// 			$sql = "UPDATE testusers SET Enroledate = ".$date." WHERE EmailAddress = '$email' ";
// 			pg_query($conn, $sql);


// 		}
// 	} 
// }

function check_register($email, $password){
	global $conn;
	global $regUser;
	global $regResult;

	if(pg_num_rows($regResult) == 1)
	{
		$regUser = pg_fetch_assoc($regResult, 0);
		if(!$is_user = password_verify($_POST['Password'], $regUser["password"]))
		{
			// dump($user);
			echo "This user is not authenticated ";
			// header('Location:./dashboard.php');
			// ob_flush();
		} 
		else
		{
			// $date = date("Y-m-d",time());
			// $sql = "UPDATE testusers SET Enroledate = ".$date." WHERE EmailAddress = '$email' ";
			// pg_query($conn, $sql);

			dump($regUser);
		}
	} 


}

function display_table(){
	
}
?>