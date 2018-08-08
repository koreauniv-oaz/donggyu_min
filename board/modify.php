<?php
include("include/dbconfig.php");
$idx = $_GET['idx'];
$query = "select * from board where idx = '$idx'";
$row = mysqli_fetch_array($mysqli->query($query));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="" name="discription">
  <meta content="" name="author">
  <meta property="og:title" content="" />
  <meta property="og:url" content="" />
  <meta property="og:type" content="website" /> 
  <meta property="og:image" content="" />
  <title>클론코딩_board</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/gallery.min.css">
  <link rel="stylesheet" href="assets/css/gallery.theme.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<form action="include/multi.php" method="post">
		<input type="hidden" name="cmd" value="1">
    <input type="hidden" name="idx" value="<?php echo $idx; ?>">
    <input type="text" placeholder="title" name="title" value="<?php echo $row['title'];?>">
    <textarea name="contents" id=""><?php echo $row['contents'];?></textarea>
    <hr>
		<button>수정하기</button>

	</form>
</body>
</html>

