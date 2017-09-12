<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<title>Php test</title>

</head>
	
<body>



	<form action="test.php" method="post">

		Card Number:<br>
		<input type="text" name="cardnumber">
		<input type="submit" name="submit"><br>
		Code:<br>
		<input type="text" name="code"><br>
		Gender:<br>
		<input type="radio" name="gender" value="male" checked>Male<br>
		<input type="radio" name="gender" value="female">Female<br>
		<input type="radio" name="gender" value="other">Other<br>




	</form>

	<?php


	if(isset($_POST["submit"])){

	$cardnumber = $_POST["cardnumber"];
	$cardnumber = htmlentities($cardnumber);
	$cardnumber = addslashes($cardnumber);

	$code = $_POST["code"];
	$code = htmlentities($code);
	$code = addslashes($code);

	$gender = $_POST["gender"];
	
	if ($gender = "male") {
		echo "Hej male tack för ditt kort nummer och code, nu kommer jag ta alla dina pengar <br>";
	}
	if ($gender = "female") {
		echo "Hej female tack för ditt kort nummer och code, nu kommer jag ta alla dina pengar <br>";
	}
	if ($gender = "other") {
		echo "Hej (vem du nu är) tack för ditt kort nummer och code, nu kommer jag ta alla dina pengar <br>";
	}

	echo "Card Number = " . $cardnumber . "<br>";
	echo "Code = " . $code;
	}
	?>

</body>

</html>