<!-- a9911200_learn	a9911200_learn	mysql1.000webhost.com	-->
<!-- user_id  user_name  full_name  email_id -->
		
<?php

//echo phpinfo();
//$host = "localhost"; 
//$user = "";
//$pass = "";
//$db_name ="learning";
$host = "mysql1.000webhost.com"; 
$user = "a9911200_learn";
$pass = "bb";
$db_name ="a9911200_learn";

$connect = mysqli_connect($host, $user, $pass, $db_name);

if(!$connect){
	echo "could not connect to server <br>";
	die("Connection failed: " . mysqli_connect_error());

} else {
	echo "Connect to server Successfully! <br>";
$db = mysqli_select_db($connect, $db_name);

if(!$db){//on fail connection will die
echo "could not select to DB {$db_name}<br>";
	die("Select to DB failed: " . mysqli_error());
	
	
}else { //on sucess connection will Maintain
	echo "Select to DB Successfully! {$db_name}	 <br>";
}

	
}

 fsdfs

 
?>
