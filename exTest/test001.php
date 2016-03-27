<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		
		<style>
			#util{
				position: relative;
			}
			
			#util li{
				list-style: none;
				display: inline;
			}
			
			#login_f{
				border: 1px solid black;
				width: 200px;
				position: absolute;
				top: -500px;
			}
			
			#login_f p{
				font-family: sans-serif;
			}
			
			.login_btn{
				float: left;
			}
			
		</style>
		
	</head>
	<body>
		<ul id="util">
			<li><input type="button" id="login" value="login">
				<form action="http://localhost:8080/phpS/p01test01.php" method="post" id="login_f">
					<p>ID : <input type="text" name="id"></p>
					<p>PW : <input type="password" name="pw"></p>
					<p><input type="submit" value="login" class="login_btn"></p>
					<p><input type="button" value="x" class="close_btn"></p>
				</form>
			</li>
			<li><a href="http://localhost:8080/phpS/p01join.php"><input type="button" value="Join"></a></li>
			
		</ul>
		
		<script>
			$(function(){
				$("#login").click(function(){
					$("#login_f").animate({"top":"45px"},"fast");
				});
				
				$(".close_btn").click(function(){
					$("#login_f").animate({"top":"-500px"},"fast");
				});
			});
		
		</script>
	</body>
</html>