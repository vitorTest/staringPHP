<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PH	P_SELF"]); ?>">
	Name:    <input type="text" name="name"> <br>
	E-mail:  <input type="text" name="email"> <br>
	Website: <input type="text" name="website"> <br>
	Comment: <textarea name="comment" rows="5" cols="40"></textarea> <br>
	Gender:  <input name="gender" value="female" type="radio"> Female
		 <input name="gender" vale="male" type="radio"> Male
		 <input name="gender" value="other" type="radio"> Other <br>
	<input name="submit" value="Submit" type="submit">
	</form> <br>

	<table>
	<?php
		foreach($_POST as $key => $value){
			echo "<tr>";
			echo "<td>";
			echo $key;
			echo "<tr>";
                        echo "<td>";
			echo $value;
			echo "<tr>";
                        echo "<td>";
		}
	?>
	</table>
</body>
</html>


