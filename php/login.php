<?php include('./dbconfig.php'); ?>
<?php include('./multi.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

	<title>log-in</title>
</head>
<body>
	<form action="multi.php" method="post">
		<input name="id" type="text" placeholder="id" required="">
		<input name="pw" type="text" placeholder="pw" required="">
		<input type="hidden" name="cmd" value="0">
		<button>submit</button>
	</form>
</body>
</html>