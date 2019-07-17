<!DOCTYPE html>

<body>


	<!-- by post method -->
	<h2>BY POST METHOD</h2>
	<form method="post" action="">
		Name<input type="text" name="fname">
		<input type="submit">
	</form>



	<?php 

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = htmlspecialchars($_POST["fname"]);

			if (empty($name)) {
				echo "<h4>Please enter the name</h4>";
			}else{
				echo "<h4>$name<h4>";
			}
		}


	 ?>


	 <!-- by get method -->
	 <h2>BY GET METHOD</h2>
	<form action="" method="get">
		Name <input type="text" name="fname">
			<input type="submit">
	</form>

	<?php 

		if ($_SERVER["REQUEST_METHOD"] == "GET") {
			$name = htmlspecialchars($_GET["fname"]);

			if (empty($name)) {
				echo "<h4>The name field is empty</h4>";
			}else{
				echo "<h4>$name</h4>";
			}
			
		}

	?>
	
	<!-- by request method -->
	 <h2>By Request Method</h2>

	  <form action="" method="post">
	    Name <input type="text" name="fname">
	    <input type="submit">
	  </form>

	  <?php 

	    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	      $name = htmlspecialchars($_REQUEST["fname"]);

	      if (empty($name)) {
	        echo "Name field is empty";
	      }else{
	        echo "$name";
	      }

	    }



	   ?>



	
</body>
</html>