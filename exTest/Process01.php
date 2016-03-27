<?php
	$conn = mysqli_connect('localhost','root',dkdladb);
	
	mysqli_select_db($conn,'logintest');
	
	$sql = "INSERT INTO login (id,pw) VALUES ('".$_POST['login_id']."', '".$_POST['login_pw']."')";
	
	$result = mysqli_query($conn, $sql);
	
	
	}
?>