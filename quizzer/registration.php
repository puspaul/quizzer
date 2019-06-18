<?php

session_start();
/*header('location:login.php');*/
$dbname='userregistration';
$db=mysqli_connect('localhost','root','',$dbname);
mysqli_select_db($db,$dbname);
		
$name=$_POST['user'];
$pass=$_POST['password'];

$sql_statement="select *from usertable where name= '$name'";
$result=mysqli_query($db,$sql_statement);
$num=mysqli_num_rows($result);

if($num==1)
		echo"Username Already Taken";
	else
		{
			$reg= "insert into usertable(name,password) values ('$name','$pass')";
			mysqli_query($db,$reg);
			echo "Registration Successful";
		}
		
?>
		
