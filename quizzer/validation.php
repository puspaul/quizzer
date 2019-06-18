<?php include 'database.php';?>
<?php session_start(); ?>
<?php

$dbname='userregistration';
$db=mysqli_connect('localhost','root','',$dbname);
mysqli_select_db($db,$dbname);
		
$name=$_POST['user'];
$pass=$_POST['password'];

$sql_statement=" select * from usertable where name= '$name' && password='$pass'";
$result=mysqli_query($db,$sql_statement);
$num=mysqli_num_rows($result);


	$sql_statements=" select * from usertable where name= '$name'";
			$results=mysqli_query($db,$sql_statements);
			$nums=mysqli_num_rows($results);

if($num==1)
	{	
$ar1=array(1,2,3,4,5);
$ar2=array(6,7,8,9,10);

$ar3=array(11,12,13,14,15);
$ar4=array(16,17,18,19,20);
shuffle($ar1);
shuffle($ar2);
shuffle($ar3);
shuffle($ar4);
$ar=array_merge($ar1,$ar2,$ar3,$ar4);
$i=0;
while($i<20)
{
	
	$k=$i+1;
$sqlquery="UPDATE questions SET q_num='$ar[$i]' WHERE ctr='$k'";
$results=mysqli_query($db,$sqlquery) or die(mysqli_error($db));
 if(!$results)
	 echo"sorry";
$queryc="UPDATE choices SET q_num='$ar[$i]' WHERE ctr='$k'";
$resultc=mysqli_query($db,$queryc) or die(mysqli_error($db));
if(!$resultc)
	 echo"sorry";
 $i++;
 
}
	print_r($ar);
	$_SESSION['username']=$name;
	header('location:home.php');
	}
	else if($nums==1)
	{
			echo "  Sorry ,wrong password try again";
		}
	else
	{
		echo "Username not registered,Register First";
	}		
?>
		
