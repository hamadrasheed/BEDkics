<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<link rel="stylesheet" href="style/id.css">
	<style>
		.error{
			color: red;
		}
	</style>
</head>

<body>

<?php 

	$firstName = $birthdayDate = $email = $mobileNumber = $gender = $state = $country = $course = $qualification = "";

	$firstNameErr = $birthdayDateErr = $emailErr = $mobileNumbeErr = $genderErr = $stateErr = $countryErr = $courseErr = $qualificationErr =  "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["firstName"])) {
			$firstNameErr = "* Required!";
		}else{
			$firstName = test_input($_POST["firstName"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $firstName)) {
				$firstNameErr = "* Only Letters and white spaces are allowed!";
			}
		}
		
		if (empty($_POST["birthdayDate"])) {
			$birthdayDateErr = "* Please enter your date of birth!";
		}


		if (empty($_POST["email"])) {
			$emailErr = "* Please enter your email";
		}else{
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "* Invalid";
			}
		}

		if (empty($_POST["mobileNumber"])) {
			$mobileNumbeErr = "* Required";
		}else{
			$mobileNumber = test_input($_POST["mobileNumber"]);
			if (!preg_match("/^[0-9 ]*$/", $mobileNumber)) {
				$mobileNumbeErr = "* Invalid Number";
			}
		}
		if (empty($_POST["gender"])) {
			$genderErr = "* Gender is required!";
		}else{
			$gender = test_input($_POST["gender"]);
		}

		if (empty($_POST["state"])) {
			$stateErr = "* State is required!";
		}else{
			$state = test_input($_POST["state"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $state)) {
				$stateErr = "* Only Letters and white spaces are allowed!";
			}

		}

		if (empty($_POST["country"])) {
			$countryErr = "* Country is required!";
		}else{
			$country = test_input($_POST["country"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $country)) {
				$countryErr = "* Only Letters and white spaces are allowed!";
			}

		}

		if (empty($_POST["course"])) {
			$courseErr = "* Required!";
		}else{
			$course = test_input($_POST["course"]);
		}

		if (empty($_POST["qualification"])) {
			$qualificationErr = "* Required!";
		}else{
			$qualification = test_input($_POST["qualification"]);
		}



	}

	function test_input($data){
			$data = htmlspecialchars($data);
			$data = trim($data);
			$data = stripslashes($data);
			return $data;
		}


 ?>



	<h3>KICS UET Registration Form</h3>

	<form action="" method="post">

	<table class="abcd" align="center" cellpadding="10">
		<!-- First name -->
	<tr>
		<td>First Name</td>
		<td><input type="text" name="firstName" maxlength="8" />
		(max7 characters from a-z and A-Z) 
		<span class="error"> <?php echo $firstNameErr; ?> </span>
		</td>
	</tr>
	<!-- Last Name -->
	<tr>
		<td>Last Name</td>
		<td> <input type="text" name="firstName" maxlength="8"/>
		(max7 characters from a-z and A-Z)
		<span class="error"> <?php echo $firstNameErr; ?> </span>
		</td>
	</tr>
	<!-- Date of Birth -->
	<tr>
		<td>Date of Birth</td>

		<td><select name="birthdayDate" id="birthday_date">

			<option value="-1">Day:</option>				
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>

			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>

			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>

		</select>

		<select name="birthdayDate" id="birthday_month">
			<option value="-1">Month</option>
			<option value="January">January</option>
			<option value="February">February</option>
			<option value="March">March</option>
			<option value="April">April</option>
			<option value="May">May</option>
			<option value="June">June</option>
			<option value="July">July</option>
			<option value="August">August</option>
			<option value="September">September</option>
			<option value="October">October</option>
			<option value="November">November</option>
			<option value="December">December</option>
	
		</select>

		<select>
			<option value="-1">Year:</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
			<option value="2005">2005</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
			<option value="2002">2002</option>
			<option value="2001">2001</option>
			<option value="2000">2000</option>
			 
			<option value="1999">1999</option>
			<option value="1998">1998</option>
			<option value="1997">1997</option>
			<option value="1996">1996</option>
			<option value="1995">1995</option>
			<option value="1994">1994</option>
			<option value="1993">1993</option>
			<option value="1992">1992</option>
			<option value="1991">1991</option>
			<option value="1990">1990</option>
			 
			<option value="1989">1989</option>
			<option value="1988">1988</option>
			<option value="1987">1987</option>
			<option value="1986">1986</option>
			<option value="1985">1985</option>
			<option value="1984">1984</option>
			<option value="1983">1983</option>
			<option value="1982">1982</option>
			<option value="1981">1981</option>
			<option value="1980">1980</option>


			
		</select>

		<span class="error"> <?php echo $birthdayDateErr; ?> </span>



		</td>
	</tr>

	<!-- Email id -->
	
	<tr>
		<td>Email ID</td>
		<td><input type="text" name="email" maxlength="20">
			<span class="error"> <?php echo $emailErr; ?> </span>
		</td>

	</tr>

	<!-- Mobile Number -->

	<tr>
		<td>Mobile Number</td>
		<td><input type="text" name="mobileNumber" maxlength="11">(11 digit Number)
			<span class="error"> <?php echo $mobileNumbeErr; ?> </span>
		</td>

	</tr>
	<tr>
		<td>Gender</td>
		<td>
			Male<input type="radio" name="gender" value="Male">
			Female <input type="radio" name="gender" value="Female">
			Other <input type="radio" name="gender" value="Other">
			<span class="error"> <?php echo $genderErr; ?> </span>
		</td>
	</tr>

	<!-- Address -->

	<tr>
		<td>Address <br><br></td>
		<td>
			<textarea name="address" rows="5" cols="20"> </textarea>
		</td>
	</tr>


	<!-- City -->
	<tr>
		<td>City</td>
		<td><input type="text" name="city" maxlength="30">
		(max 20 characters)
		</td>
		
	</tr>
	
	<!-- Pin  Code -->
	<tr>
		<td>Pin Code</td>

		<td><input type="text" name="pinCode" maxlength="4"> (4 digit code)</td>
	
	</tr>
	<!-- State -->
	<tr>
		<td>State</td>
		<td><input type="text" name="state" maxlength="10">
			<span class="error"> <?php echo $stateErr; ?> </span>

		</td>

	</tr>
	<!-- Country -->
	<tr>
		<td>Country</td>
		<td><input type="text" name="country" maxlength="15">
			<span class="error"> <?php echo $countryErr; ?> </span>

		</td>
	</tr>
	<!-- Hobbies -->
	<tr>
	<td>HOBBIES <br /><br /><br /></td>
	 
		<td>
		Drawing
		<input type="checkbox" name="Hobby_Drawing" value="Drawing" />
		Singing
		<input type="checkbox" name="Hobby_Singing" value="Singing" />
		Dancing
		<input type="checkbox" name="Hobby_Dancing" value="Dancing" />
		Sketching
		<input type="checkbox" name="Hobby_Cooking" value="Cooking" />
		<br />
		Others
		<input type="checkbox" name="Hobby_Other" value="Other">
		<input type="text" name="Other_Hobby" maxlength="30" />
	</td>
	</tr>
	
	<!-- Qualification -->
	<tr>
		<td>Qualification <br><br><br><br></td>

	<td>
		<table class="inner">
			<tr>
				<td align="center">No.</td>
				<td align="center">Class</td>
				<td align="center">Subjects</td>
				<td align="center">Board</td>
				<td align="center">Percentage</td>
				<td align="center">Year of Passing</td>
			</tr>

			<tr>
				<td>1</td>
				<td>Metric</td>
				
				<td><input type="text" name="qualification" maxlength="10">
				</td>
				
				<td><input type="text" name="qualification" maxlength="30">
				</td>
				
				<td><input type="text" name="qualification" maxlength="10">
				</td>

				<td><input type="text" name="qualification" maxlength="10">
				</td>

			<tr>
				<td>2</td>
				<td>Intermediate</td>

				<td><input type="text" name="qualification"  maxlength="10"></td>

				<td><input type="text" name="qualification"  maxlength="30"></td>

				<td><input type="text" name="qualification" maxlength="10""></td>

				<td><input type="text" name="qualification " maxlength="10""></td>
			
			</tr>

			<tr>
				<td>3</td>
				<td>Graduation</td>

				<td><input type="text" name="" maxlength="10"></td>

				<td><input type="text" name="" maxlength="10"></td>

				<td><input type="text" name="" maxlength="10"></td>

				<td><input type="text" name="" maxlength="10"></td>

			</tr>

			<tr>
				<td></td>
				<td></td>
				<td align="center">(10 char max)</td>
				<td align="center">(upto 2 decimal)</td>
			</tr>

			<span class="error"> <?php echo $qualificationErr; ?> </span>


		</table>

	</td>
	</tr>

	<!-- Course -->

	<tr>
		<td>Course <br> Applied For</td>
		<td>
			BS<input type="radio" name="course" value="BS">
			B.COM<input type="radio" name="course" value="B.COM">
			B.Sc<input type="radio" name="course" value="B.Sc">
			B.A<input type="radio" name="course" value="B.A">

			<span class="error"> <?php echo $courseErr; ?> </span>

		</td>

	</tr>

	<tr>
		
		<td colspan="2" align="center">
			<input type="submit" >
			<input type="reset" >
		</td>
	</tr>



	</table>
</form>





	
</body>
</html>
