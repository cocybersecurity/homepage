<?php
	if($_POST){
		if($_POST['id'] === 'admin' && $_POST['pw'] === 'dkdlfgkrltlfgek'){ // 이 비밀번호는 서버 통합 비밀번호니간 잘 간수 해야됨, 아니면 서버 해킹 당함!
			exit('hello admin!');
		}
	}
?>
<html>
	<head>
		<title>admin page</title>
	</head>
	<body>
		<center>
			<form action="index.php" method="POST">
				<input type="text" name="id"/>
				<input type="password" name="pw"/>
				<input type="submit" value="login"/>
			</form>
		</center>
	</body>
</html>