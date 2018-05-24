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
		
		$sql = "(SELECT fbId, fbPerson, fbEmail, fbComment
		FROM hcm_feedback ORDER BY fbId DESC LIMIT 10) ORDER BY fbId ASC";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			echo "<a><table class='feedback'>";
			//output data of each row
			echo "<tr>";
				echo "<td><tds>FeedbackId</tds></td>";
				echo "<td><tds>Name</tds></td>";
				echo "<td><tds>Email</tds></td>";
				echo "<td><tds>Comment</tds></td>";
			echo "</tr>";
			
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
					echo "<td><tds>" . $row["fbId"]. "</tds></td>";
					echo "<td><tds>" . $row["fbPerson"]. "</tds></td>";
					echo "<td><tds>" . $row["fbEmail"]. "</tds></td>";
					echo "<td><tds>" . $row["fbComment"]. "</tds></td>";
			}
			echo "</table></a>";
		}
		else {
			echo "0 results";
		}
		$conn->close();
	?>
	</p>
	<form action="feedbackdone.php" method="post" name="FeedBackForm" id="FeedBackForm">
		<h3>Leave Your Feedback here:</h3>
		<table>
			<tbody>
				<tr>
					<td>Name</td>
					<td>
						<input name="fbName" type="text" id="fbName" size="50" maxlength="100" required="required">
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<input name="fbEmail" type="text" id="fbEmail" size="50" maxlenght="100" required="required">
					</td>
				</tr>
				<tr>
					<td>Comment</td>
					<td>
						<input name="fbComment" type="text" id="fbComment" size="50" maxlength="100" required="required">
					</td>
				</tr>
				<tr>
					<td><input type="reset" name="reset" id="reset" value="Reset"></td>
					<td><input type="submit" name="submit" id="submit" value="Submit"></td>
				</tr>
			</tbody>
		</table>
	</form>
	</maincontent>
	<footer>
	
	</footer>
</body>
</html>
