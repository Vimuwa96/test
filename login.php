<!DOCTYPE html>
<html>

<head>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => login 
		$conn = mysqli_connect("localhost", "root", "", "login");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 2 values from the form data(input)
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO userdata VALUES ('$username',
			'$password')";
		
        //Data Save to DB and open anther html or PHP File
		if(mysqli_query($conn, $sql)){
			echo header('location:home.php');

            echo "<h5>data saved<h5>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
