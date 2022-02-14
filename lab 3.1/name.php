
<!DOCTYPE html>
<html>

<body>
	
	<h3> HTML input form </h3>

	
	<form method="POST">
		<h4> Name : </h4>
		<input type="text" name="name"><br>
	

		<input type="submit" name="submit">
	</form>
</body>

</html>
<?php
	
	
	if (isset($_POST['submit'])) {
	
		
	$name = $_POST['name'];
		

		echo "<h1><i>  $name  </i></h1>";
	}
?>
