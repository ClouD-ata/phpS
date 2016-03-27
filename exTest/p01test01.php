<?php
	$conn = mysqli_connect('localhost','root',dkdladb);
	mysqli_select_db($conn, 'test01');
	
	$sql = "SELECT * FROM login where id='".$_POST['id']."'";
	$result = mysqli_query($conn, $sql);
	
	if($result->num_rows == 1){
		$sql = "select * from login where id='".$_POST['id']."' AND password='".$_POST['pw']."'";
		$result = mysqli_query($conn, $sql);
		
		if($result->num_rows == 1){
			echo "login";
		}else{
			echo "password is wrong";
		}
	} else {
		echo "id is not exist";
	}
	
?>