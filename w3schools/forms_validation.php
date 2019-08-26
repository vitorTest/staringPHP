<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
	// define variables and set to empty values
	$name = $email = $gender = $comment = $website = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $name = test_input($_POST["name"]);
	  $email = test_input($_POST["email"]);
	  $website = test_input($_POST["website"]);
	  $comment = test_input($_POST["comment"]);
	  $gender = test_input($_POST["gender"]);
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
}
?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 		Name:   <input type="text" name="name"> <br>
		E-mail: <input type="text" name="email"> <br>
		Website:<input type="text" name="website"> <br>
		Comment:<textarea name="comment" rows="5" cols="40"></textarea> <br>

		Gender: <input name="gender" value="female" type="radio"> Female
			 	<input name="gender" vale="male" type="radio"> Male
			 	<input name="gender" value="other" type="radio"> Other 
			 	<br>

		<input name="submit" value="Submit" type="submit">
	</form> <br>

	<table>
		<tr>
			<th> Property </th>
			<th> Value	</th>
		</tr>
	<?php
		foreach($_POST as $key => $value){
			echo "<tr>";
				echo "<td>";
					echo $key;
				echo "</td>";

				echo "<td>";
					echo $value;
				echo "</td>";
			echo "</tr>";               
		}
	?>
	</table>
</body>
</html>


