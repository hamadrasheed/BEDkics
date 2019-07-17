<!DOCTYPE html>
<head>
	<style>
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<?php 

		$name = $email = $website = $comment = $gender = "";
		$nameErr = $emailErr = $genderErr = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			if (empty($_POST["name"])) {
				$nameErr = "Name is required!";
			}else{
				$name = $_POST["name"];
			}

			if (empty($_POST["email"])) {
				$emailErr = "E-mail is required!";
			}else{
				$email = $_POST["email"];
			}
			

			if (empty($_POST["website"])) {
				$emailErr = "";
			}else{
				$website = $_POST["website"];
			}


			if (empty($_POST["comment"])) {
				$emailErr = "";
			}else{
				$comment = $_POST["comment"];
			}


			if (empty($_POST["gender"])) {
				$emailErr = "Gender is required!";
			}else{
				$gender = $_POST["gender"];
			}
		}

		function test_input($data){
			$data = htmlspecialchars($data);
			$data = trim($data);
			$data = stripslashes($data);
			return $data;
		}


	 ?>

	<h2>Required Field Form</h2>
	<span class="error">* Required Fields</span>
	<br><br>
	<form action="" method="post">
		Name: <input type="text" name="name">
			<span class="error">* <?php echo $nameErr; ?></span>
			<br><br>

		E-mail: <input type="text" name="email">
			<span class="error">* <?php echo $emailErr; ?> </span>
			<br><br>

		Website: <input type="text" name="website">
			<br><br>

		Comment: <textarea name="comment"  cols="40" rows="5"></textarea>
			<br><br>

		Gender: <input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="other">Other
					<span class="error">* <?php echo $genderErr; ?> </span>
					<br><br>

		<input type="submit">
	</form>

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