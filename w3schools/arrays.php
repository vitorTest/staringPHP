<!DOCTYPE html>
<html>
<head>
	<title>Randon Tests</title>
	<link rel="stylesheet" type="text/css" href="style/lv1.css">
	<script src="javascripts/application.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	<p id="cars">
	My cars are: <br />
		<?php 
			$breakLine = "<br />";
			$cars = array("Range Rover", "Tesla", "Ford KA");
		
			for($x = 0; $x < count($cars); $x++){
				echo $cars[$x];
				echo $breakLine;
			}
		?>
	</p>

	<p id="persons">
	And these are some persons with their respectives ages:
		<?php 
			echo $breakLine;
			
			$age = array('Lucas' => 20, 'Matheus' => 23, 'Luiz' => 23, 'Candida' => 24);

			foreach ($age as $person => $p_age){
				echo $person." have ".$p_age." years old";
				echo $breakLine;
			}

		?>	
	</p>
</body>
</html>
