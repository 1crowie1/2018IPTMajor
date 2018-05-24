<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Physics - Home</title>
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
	<maincontent>
	<h1>Physics eLearning Feedback Page</h1>
	<h3>Last 10 Feedback Comments</h3>
	<p>
	
	<?php
		include 'redirect.php';
		
		$servername = "172.16.2.214";
		$username = "student";
		$password = "password";
		$dbname = "studentdb";
		
		//create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		//check connection
		if ($conn->connect_errno) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$fbPerson = $_POST["fbName"];
		$fbEmail = $_POST["fbEmail"];
		$fbComment = $_POST["fbComment"];
		
		if ($fbPerson != '' and $fbEmail != '' and $fbComment != '') {
			$sql = "INSERT INTO hcm_feedback (fbPerson, fbEmail, fbComment) VALUES ('".$fbPerson."', '".$fbEmail."', '".$fbComment."')";
		}
		else {
			echo "Please enter data in all fields";
		}
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		}
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		
		$url = 'feedback.php';
		echo ($url);
		redirect($url);
		
		?>
	</p>

	</form>
	</maincontent>
	<footer>
	
	</footer>
</body>
</html>
