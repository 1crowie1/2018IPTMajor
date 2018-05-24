<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Physics - Quiz</title>
<link href="css/physics.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header><ti>Physics eLearning</ti>
	</header>
	<nav>
		<ul>
			<hm><li><a href="index.html">Home</a></li></hm>
			<li><a href="quiz.html">Quiz</a></li>
			<li><a href="gallery.html">Gallery</a></li>
			<fb><li><a href="feedback.php">Feedback</a></li></fb>
		</ul>
	</nav>
	
	<?php
	$totalscore = 0;
	$maxscore = 10;
	
	if (isset($_POST["q1"])) {
		$answer1 = $_POST["q1"];
		if ($answer1 == "T") {
			echo("<h3>Question 1 is correct!</h3>");
			$totalscore +=1;
		}
		else {
			echo("<h3>Question 1 is incorrect!</h3>");	
		}
	}
	else {
		echo("<h3>Question 1 has not been answered!</h3>");
	}
	
	
	if (isset($_POST["q2"])) {
		$answer1 = $_POST["q2"];
		if ($answer1 == "T") {
			echo("<h3>Question 2 is correct!</h3>");
			$totalscore +=1;
		}
		else {
			echo("<h3>Question 2 is incorrect!</h3>");	
		}
	}
	else {
		echo("<h3>Question 2 has not been answered!</h3>");
	}
	
	if (isset($_POST["q3"])) {
		$answer1 = $_POST["q3"];
		if ($answer1 == "T") {
			echo("<h3>Question 3 is correct!</h3>");
			$totalscore +=1;
		}
		else {
			echo("<h3>Question 3 is incorrect!</h3>");	
		}
	}
	else {
		echo("<h3>Question 3 has not been answered!</h3>");
	}
	
	if (isset($_POST["q4"])) {
		$answer1 = $_POST["q4"];
		if ($answer1 == "T") {
			echo("<h3>Question 4 is correct!</h3>");
			$totalscore +=1;
		}
		else {
			echo("<h3>Question 4 is incorrect!</h3>");	
		}
	}
	else {
		echo("<h3>Question 4 has not been answered!</h3>");
	}
	
	if (isset($_POST["q5"])) {
		$answer1 = $_POST["q5"];
		if ($answer1 == "T") {
			echo("<h3>Question 5 is correct!</h3>");
			$totalscore +=1;
		}
		else {
			echo("<h3>Question 5 is incorrect!</h3>");	
		}
	}
	else {
		echo("<h3>Question 5 has not been answered!</h3>");
	}
	
	if (isset($_POST["q6"])) {
		$answer1 = $_POST["q6"];
		if ($answer1 == "T") {
			echo("<h3>Question 6 is correct!</h3>");
			$totalscore +=1;
		}
		else {
			echo("<h3>Question 6 is incorrect!</h3>");	
		}
	}
	else {
		echo("<h3>Question 6 has not been answered!</h3>");
	}
	
	if (isset($_POST["q7"])) {
		$answer1 = $_POST["q7"];
		if ($answer1 == "T") {
			echo("<h3>Question 7 is correct!</h3>");
			$totalscore +=1;
		}
		else {
			echo("<h3>Question 7 is incorrect!</h3>");	
		}
	}
	else {
		echo("<h3>Question 7 has not been answered!</h3>");
	}
	
	if (isset($_POST["q8"])) {
		$answer1 = $_POST["q8"];
		if ($answer1 == "T") {
			echo("<h3>Question 8 is correct!</h3>");
			$totalscore +=1;
		}
		else {
			echo("<h3>Question 8 is incorrect!</h3>");	
		}
	}
	else {
		echo("<h3>Question 8 has not been answered!</h3>");
	}
	
	if (isset($_POST["q9"])) {
		$answer1 = $_POST["q9"];
		if ($answer1 == "T") {
			echo("<h3>Question 9 is correct!</h3>");
			$totalscore +=1;
		}
		else {
			echo("<h3>Question 9 is incorrect!</h3>");	
		}
	}
	else {
		echo("<h3>Question 9 has not been answered!</h3>");
	}
	
	if (isset($_POST["q10"])) {
		$answer1 = $_POST["q10"];
		if ($answer1 == "T") {
			echo("<h3>Question 10 is correct!</h3>");
			$totalscore +=1;
		}
		else {
			echo("<h3>Question 10 is incorrect!</h3>");	
		}
	}
	else {
		echo("<h3>Question 10 has not been answered!</h3>");
	}
	
	echo("<h3>Well done, you got a score of ".$totalscore." out of ".$maxscore."!</h3>");
	
	?>
	
	<maincontent>
	
	</maincontent>
	<footer>
	
	</footer>
</body>
</html>
