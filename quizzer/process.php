<?php include 'database.php';?>
<?php session_start(); ?>
<?php 
	if(!isset($_SESSION['score']))
	{
		$_SESSION['score']=0;
	}

	if($_POST)
	{
		$number=$_POST['number'];
		$selected_choice=$_POST['choice'];
		$next=$number+1;
	
	$a=1;
	$query="SELECT * FROM choices
		WHERE q_num='$number' AND correct = $a ";
		$result=mysqli_query($db,$query) or die(mysqli_error($db));
		$row=mysqli_fetch_assoc($result);
		$correct_choice=$row['id'];
		echo $correct_choice;

		$querys="SELECT * FROM questions";
		$results=mysqli_query($db,$querys);
		
		$total=mysqli_num_rows($results);

		if($correct_choice==$selected_choice)
			{
				$_SESSION['score']++;
			}
		
		
		if($number==$total)
		{
			header("Location: final.php");
			exit();
		}
		else
		{
			header("Location: question.php?n=".$next);
		}
	}
?>
	