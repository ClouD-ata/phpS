<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		
		<style>
			p{
				font-family: sans-serif;
			}
			
		</style>
		
	</head>
	<body>
		<form action="http://localhost:8080/phpS/p01process.php" method="post">
			<p>ID <input type="text" id="id" name="join_id"><input type="button" class="confirm" value="Confirm"></p> 
			<p>PW <input type="password" name="join_pw"></p> 
			<p><input type="submit" value="Join"></p> 
		</form>
		<script>
			
		</script>

	</body>
</html>