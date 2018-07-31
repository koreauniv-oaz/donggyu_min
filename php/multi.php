<?php
session_start();
include('./dbconfig.php');
ini_set('display_errors', 1);

define("CMD_REQUEST_LOGIN", 0);
define("CMD_REQUEST_REGISTER", 1);

switch ((int) $_POST['cmd']) {
	case "CMD_REQUEST_LOGIN":
		
		if (empty($_POST['id']) || empty($_POST['pw'])) {
			die('<script>alert("empty!"); history.go(-1);</script>');
		}	else{
			$id = $_POST['id'];
			$pw = $_POST['pw'];

			$id = addslashes($id);
			$id = stripslashes($id);
			$id = mysqli_real_escape_string(conn, $id);

			$pw = addslashes($pw);
			$pw = stripslashes($pw);
			$pw = mysqli_real_escape_string(conn, $pw);

			$pw = hash('sha512', $pw);

			$query = "select * from user where id = '$id' and pw = '$pw'";
			$row = mysql_fetch_assoc($mysqli->query($query));

			if ($row) {
				die('<script>alert("login complete");</script>');
			}	else {
				die('<script>alert("login failed");</script>');
			}

		}
		break;

	case "CMD_REQUEST_REGISTER":
	
	if (empty($_POST['id'] || empty($_POST['pw']) || empty($_POST['name']) || empty($_POST['pw_re'])) {
		die('<script>alert("empty!"); history.go(-1);</script>');
	}	else{
		$id = $_POST['id'];
		$pw = $_POST['pw'];
		$name = $_POST['name'];
		$pw_re = $_POST['pw_re'];
		$id = addslashes($id);
		$id = stripslashes($id);
		$id = mysqli_real_escape_string(conn, $id);
		$name = addslashes($name);
		$name = stripslashes($name);
		$name = mysqli_real_escape_string(conn, $name);
		$pw_re = addslashes($pw_re);
		$pw_re = stripslashes($pw_re);
		$pw_re = mysqli_real_escape_string(conn, $pw_re);
		$pw = addslashes($pw);
		$pw = stripslashes($pw);
		$pw = mysqli_real_escape_string(conn, $pw);

		$pw = hash('sha512', $pw);
		$pw_re = hash('sha512', $pw_re);

		if ($pw != $pw_re) {
			die('<script>alert("retype password"); </script>')
		}

		$query = "select * from user where id = '$id' and pw = '$pw'";
		$row = mysql_fetch_array($mysqli->query($query));

		if ($row) {
			die('<script>alert("existing account"); location.href="./login.php";</script>');
		}	else {

			$query = "insert into user(name, id, pw) values($name, $id, $pw)";
			$mysqli -> query($query);
			die('<script>alert("complete"); location.href="../test.php";</script>');
		}

	}
	break;
}
?>