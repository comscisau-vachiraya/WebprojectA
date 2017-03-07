<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sing In process</title>
</head>
<body>
<?php


         $uname = $_POST['uname'];
         $upassword = $_POST['upassword'];

         $host ="localhost";
         $userdb ="root";
         $passworddb = "";
         $dbname = "comscia_db";



         $conn = mysqli_connect($host,$userdb,$passworddb,$dbname);
         $strsql ="select * from user_tb 
                 where uname =' ".$uname."' and upassword='".$upassword."'";
                 

                 $result = mysqli_query($conn, $strsql);
                 if($row =mysqli_fetch_array($result)){
                 	echo "OK";

                 }else{
                 	echo "User name และ Password ไม่ถูกต้อง";
                 }

?>
	
</body>
</html>