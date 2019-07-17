<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>

	<?php 

		$name = $email = $website = $comment = $gender = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = test_input($_POST["name"]);
			$email = test_input($_POST["email"]);
			$website = test_input($_POST["website"]);
			$comment = test_input($_POST["comment"]);
			$gender = test_input($_POST["gender"]);

		}


		function test_input($data){
			$data = htmlspecialchars($data);
			$data = trim($data);
			$data = stripslashes($data);
			return $data;
		}


	 ?>

	<h2>Php Validation form</h2>

	<form action="" method="post">
		Name: <input type="text" name="name">
		<br><br>
		E-mail: <input type="text" name="email">
		<br><br>
		Website: <input type="text" name="website">
		<br><br>
		Comment: <textarea name="comment" cols="40" rows="5"></textarea>
		<br><br>
		Gender:
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="other">Others
			<br><br>
		<input type="submit">

	
	</form>

	<h2>Output</h2>

	 <?php 

	 	echo "$name";
	 	echo "<br>";
	 	echo "$email";
	 	echo "<br>";
	 	echo "$website";
	 	echo "<br>";
	 	echo "$comment";
	 	echo "<br>";
	 	echo "$gender";



	  ?>
	
</body>
</html>