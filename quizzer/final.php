<?php include 'database.php';?>
<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf_8" />
<title>QUIZZER</title>
<link rel="stylesheet" type="text/css" href="finalstyle.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>

<body>
	<header><div class="container">
			<h1>QUIZ RESULTS! </h1>
		</header>
	<main>
			<div class="results">
				<p>Congrats you have completed the test</p>
				<p>Final Score<span class="dotss">:</span><span class="samee"><?php echo $_SESSION['score']; ?></span></p>
			</div>
				<?php 
					$sqlquery="UPDATE usertable SET score='".$_SESSION['score']."' WHERE name='".$_SESSION['username']."'";
					$results=mysqli_query($db,$sqlquery) or die(mysqli_error($db));
					$_SESSION['score']=0;
					
					?>
				<a href="home.php" class="startagain">Start Again</a>
				<a href="index.php" class="logout">Logout</a>
	
			</div>
		
	</main>
		
	<footer>
		<div class="foot">
			Copyright &copy:2014,QUIZZER
		</div>
	</footer>
</body>
</html>

</html>
