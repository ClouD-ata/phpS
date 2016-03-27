<?php 
	$conn = mysqli_connect('localhost','root',dkdladb);
	mysqli_select_db($conn, 'test01');
	
	$search = "select * from login";
	$result = mysqli_query($conn, $search);
	
	while($row = mysqli_fetch_assoc($result)){
		echo $row['id'];
	}
	
	/* login process */
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
	
	/* join process */
	$insert = "INSERT INTO login (id,password,created) VALUES('".$_POST['join_id']."','".$_POST['join_pw']."',now())";
	$result = mysqli_query($conn, $insert);
	header('Location: http://localhost:8080/phpS/p01index.php');

?>
	
	