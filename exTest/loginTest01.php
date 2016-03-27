<?php
	$conn = mysqli_connect('localhost','root',dkdladb);
	
	mysqli_select_db($conn,'logintest');
	
	$result = mysqli_query($conn, 'select * from login');
	
	while($row = mysqli_fetch_assoc($result)){
		echo $row['num'];
		echo $row['id'];
		echo $row['password'];
		
		echo "<br>";
	}
?>