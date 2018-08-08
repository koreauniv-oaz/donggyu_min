<?php
session_start();
include('./dbconfig.php');
ini_set('display_errors', 0);

switch ((int) $_POST['cmd']) {
    case 0: //작성제출하기
        if(empty($_POST['title']) || empty($_POST['contents'])){
            die('<script>alert("empty"); history.go(-1);</script>');
        } else {
            $title = $_POST['title'];
            $contents = $_POST['contents'];

            $title = addslashes($title);
            $title = stripslashes($title);
            $title = mysqli_real_escape_string($conn, $title);
            $contents = addslashes($contents);
            $contents = stripslashes($contents);
            $contents = mysqli_real_escape_string($conn, $contents);

            $query = "insert into board(title, contents) values('$title', '$contents')";
            $mysqli->query($query);
            die('<script>alert("complete"); location.href="../index.php";</script>');
        }
    break;

    case 1: //수정제출하기
            if(empty($_POST['title']) || empty($_POST['contents'])){
            die('<script>alert("empty"); history.go(-1);</script>');
        } else {
            $title = $_POST['title'];
            $contents = $_POST['contents'];

            $title = addslashes($title);
            $title = stripslashes($title);
            $title = mysqli_real_escape_string($conn, $title);
            $contents = addslashes($contents);
            $contents = stripslashes($contents);
            $contents = mysqli_real_escape_string($conn, $contents);

            $query = "update board set title = '$title', contents='$contents' where idx='$idx'";
            $mysqli -> query($query);
            die('<script>alert("modified"); location.href="../index.php";</script>');  
            }
        break;

    case 2: //삭제하기
    	// $idx = $_POST['idx'];
    	// $query = "delete * from board where idx='$idx'";
    	// $mysqli -> query($query);
    	// die('<script> alert("deleted"); location.href="../index.php"; </script>')

    break;
}
?>