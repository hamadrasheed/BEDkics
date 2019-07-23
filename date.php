<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 

		// date_default_timezone_set("Asia/Pakistan");

		echo "Today is ". date("Y/m/d");
		echo "<br>";
		echo "Happy ". date("l");
		echo "<br>";
		echo "Time is ". date("h:i:sa ");

		echo "<br>";
		echo "<br>";

		$a = mktime(11,14,54,8,12,2019);
		
		echo "Created date is ". date("Y-m-d h:i:sa",$a);

		echo "<br>";
		echo "<br>";

		$d = strtotime("20th January 2019 2:30 am");

		echo "Created date is ". date("Y-m-d h:i:sa",$d);

		echo "<br>";
		echo "<br>";

		$a = strtotime("tomorrow");

		echo "Created date is ". date("Y-m-d h:i:sa",$a);

		echo "<br>";
		echo "<br>";

		$a = strtotime("+3 Years");
		echo "Created date is ".date("Y-m-d h:i:sa",$a);

		echo "<br>";
		echo "<br>";

		$startDate = strtotime("Monday");
		$endDate = strtotime("+6 weeks", $startDate);

		while ($startDate < $endDate) {
			echo date("M d",$startDate);
			echo "<br>";
			$startDate = strtotime("+1 week", $startDate);
		}

		echo "<br>";
		echo "<br>";

		






	 ?>
	
</body>
</html>