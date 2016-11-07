<?php 
	//Import the two classes for use
	include "ParentClass.php";
	include "ChildClass.php";
	//Instance of parent class
	$Steelers = new ParentClass("Steelers", "Pittsburgh", "Football");
	//Instance of child class
	$Rams = new ChildClass("Rams", "St. Louis", "Football", "rams.jpg", "The Dome at America's Center");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<h2>Football Teams!</h2>
	<section>
	  <p>It is always good to support the hometown team that has been a big part of the city for so long: </p>
		<?=$Steelers; ?>

		<p>While there is a lot of tradition here, some teams have not had as much luck. For example...</p>
		<br>
		<?=$Rams; ?>
    <br>
		<?php 
			echo "<br> <img src=img/".$Rams->getLogo()."><br>"
		?>
		<br>
		<p>Since they did not have that much popularity, a move was in order!</p>
		<?=$Rams->setCity("Los Angeles"); ?>
		<?=$Rams->setStadium("L.A Memorial Coliseum"); ?>
		<?=$Rams->setLogo("laRams.jpg"); ?>
		<p>Now starting this year...</p>
		<?=$Rams; ?>
		<br>
		<?php 
			echo "<br> <img src=img/".$Rams->getLogo()."><br>"
		?>
	</section>
	
</body>
</html>