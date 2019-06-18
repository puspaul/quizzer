<?php include 'database.php';?>

<?php session_start(); ?>
<?php 
$number=$_GET['n'];

$query="SELECT * FROM questions
		WHERE q_num=$number";
		$result=mysqli_query($db,$query) or die(mysqli_error($db));
		$question=mysqli_fetch_assoc($result);
		

$querys="SELECT * FROM choices
		WHERE q_num=$number";
		$choices=mysqli_query($db,$querys) or die(mysqli_error($db));
		
?>
<!doctype html>
<html>



<div class="time" id="quiz-time-left"></div>
<script type="text/javascript">
var total_seconds=30;
var c_minutes=parseInt(total_seconds/60);

var c_seconds=parseInt(total_seconds%60);
function CheckTime()
{
	document.getElementById("quiz-time-left").innerHTML='Time Left:' +  c_seconds + 
	'seconds';
	if(total_seconds<=0)
	{
		setTimeout('document.quiz.submit()',1);
	}
	else
	{
		total_seconds=total_seconds-1;
		c_minutes=parseInt(total_seconds/60);
		
		c_seconds=parseInt(total_seconds%60);
	setTimeout("CheckTime()",1000);
	}
}
setTimeout("CheckTime()",1000);
</script>













<head>
<style>
table,th,td{
	border:4px solid white;
}
th,td{
	padding:20px;
}
</style>
<meta charset="utf_8" />
<title>QUIZZER</title>
<!--<link rel="stylesheet" type="text/css" href="design.css"/> -->
	<link rel="stylesheet" type="text/css" href="tinner.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>

<body class="bod">
		
		<header>
		
			<div class="lev">
					<?php if($number<=5) echo "<font color=\"white\">LEVEL 1</font>";
				  if($number<=10 && $number>5 ) echo " <font color=\"white\">LEVEL 2</font> ";
				  if($number<=15 && $number>10 )echo "<font color=\"white\">LEVEL 3</font>";
				  if($number<=20 && $number>15 )echo "<font color=\"white\">LEVEL 4</font>";
					?>
			</div>
			
		</header>
		
		
				<div class="leader">
		<?php 
					$sqlquery="SELECT * FROM usertable ORDER BY score DESC";
					$results=mysqli_query($db,$sqlquery) or die(mysqli_error($db));
					
					?>
					<table class="tab">
						<tr>
							<th>NAME</th>
							<th>SCORE</th>
						</tr>
					
					
					<?php while($row=mysqli_fetch_assoc($results)): ?>
					<tr >
						
						<td class="ht"><?php	echo "<span class='name'>".$row['name']?></td>
						<td class="ht"><?php   echo "<span class='score'>".$row['score']?></td>
					</tr>
						<?php endwhile ?>
					</table>
	</div>
		

	
	
	
	<main>
		<div class="current"><?php ; echo"Question $number "; ?>of 20</div>
		<div class="acontainer">
			<p class="question">
				<?php echo $question['text'];?>
			</p>
		<form method="post" name="quiz"  action="process.php">
			
			<?php while($row=mysqli_fetch_assoc($choices)): ?>
			<label class="container">
			<input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['choice']; ?> 
			<span class="checkmark"></span>
			</label>
			<?php endwhile ?>
			
		<input type="submit" value="submit" />
		<input type="hidden" name="number" value="<?php echo $number; ?>" />
		</form>
		
				</div>
	</main>
	<a href="index.php" class="logout">Logout</a>
	<footer>
		<div class="containers">
			Copyright &copy:2019,PUSPAUL HALDER QUIZ
		</div>
	</footer>
</body>
</html>











