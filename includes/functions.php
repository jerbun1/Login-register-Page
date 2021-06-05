<?php


function users_select($email){
	$conn = db_connect();
	if(isset($_SESSION['email'])){
		$email = $_SESSION['email'];
		$password = $_SESSION['password'];
	}

	// $user=pg_prepare($conn, "users_select", "SELECT * FROM testusers WHERE EmailAddress = $1");
	// $user=pg_execute($conn, "users_select", array($email));
	
	// if(pg_num_rows($user) > 0){
	// 	$user_data = pg_fetch_assoc($user, 0);
	// 	$user = $_SESSION['user'];
	// 	print_r($user);
	// }else{
	// 	echo "User is not authenticated";
	// }
	
}


?>