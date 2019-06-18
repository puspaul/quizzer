<?php include 'database.php';?>

<!doctype html>
<html>
<head>
<meta charset="utf_8" />
<title>QUIZZER</title>
<link rel="stylesheet" type="text/css" href="finalstyle.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>

<body>
	<header>
		<div class="container">
			<h1>QUIZ TIME </h1>
			</div>
		</header>
	
		<div class="container">
			
			<p><h2 class="mul">Multiple choice quiz </h2></p>
			<ul class="write">
				<li><strong>Number of questions<span class="dots">:</span></strong><span class="same">20</span></li>
				<li><strong>Type<span class="dots">:</span></strong><span class="same">Multiple</span></li>
				<li><strong>Time  per question<span class="dots">:</span></strong><span class="same">30 seconds</span></li>
			</ul>
			<a href="question.php?n=1" class="start">Start Quiz</a>
			<a href="index.php" class="logout">Logout</a>
	
		</div>
	
	<footer>
		<div class="container">
			<div class="foot">Copyright &copy:2019,PUSPAUL HALDER QUIZ</div>
		</div>
	</footer>
</body>
</html>

</html>
