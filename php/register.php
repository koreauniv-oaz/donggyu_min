<?php include('./dbconfig.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

	<title>log-in</title>
</head>
<body>
	<form action="multi.php" method="post">
		<input name="name" type="text" placeholder="name" required="">
		<input name="id" type="text" placeholder="id" required="">
		<input name="pw" type="password" placeholder="pw" required="">
		<input name="pw-re" type="password" placeholder="pw-re" required="">
		<input type="hidden" name="cmd" value="1">
		<button>submit</button>
	</form>
</body>
</html>