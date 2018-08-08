<?
include('include/dbconfig.php');
session_start();
 ?>
 
<?php
if(!isset($_SESSION['name'])){
    header("Location: ./login.php");
}
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
	<title>클론코딩1st_카카오프렌즈</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/gallery.min.css">
	<link rel="stylesheet" href="assets/css/gallery.theme.css">
	<link rel="stylesheet" href="assets/css/style.css">


</head>
<body>

<header class="mb-5" style="">
        <nav class="navbar navbar-expand-md">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" id="logo">KAKAO FRIENDS</a>
                    </li>
                </ul>
            </div>

            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    	<div class="dropdown">
                        	<a class="nav-link" href="" id="menu">카테고리</a>
                        	<div class="hover-checker"></div>
                        	<div class="dropdown-content">
                        		<div class="container">
									<div class="row">
										<div class="col-2">
											<a href="#" id="">전체분류</a>
											<a href="#" id="">전체</a>
											<a href="#" id="">테마기획전</a>
											<a href="#" id="">박물관</a>
										</div>
										<div class="col-4">
											<a href="#" id="">전체분류</a>
											<a href="#" id="">전체</a>
											<a href="#" id="">테마기획전</a>
											<a href="#" id="">박물관</a>
										</div>

										<div class="col-6">
											<a href="#" id="">캐릭터별</a>
											<a href="#" id="">link1</a>
											<a href="#" id="">link1</a>
											<a href="#" id="">link1</a>
										</div>
									</div>
							    </div>
			</div>
						</div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" id="menu">스토리</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" id="menu">뮤지엄</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" id="menu">매장안내</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" id="menu">고객센터</a>
                    </li>
                </ul>
            </div>


            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <span style="font-size: 1.5rem;"><i class="fa fa-search"></i></span>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                        <span style="font-size: 1.5rem;"><i class="fa fa-user"></i><a href=""></a></span>
						  <div class="dropdown-content-side">
 								<?php if(!isset($_SESSION['name'])){ echo '<a href="register.php">회원가입</a><a href="login.php">로그인</a>';}?>
                                <?php if(isset($_SESSION['name'])){ echo '<a href="mypage.php">마이페이지</a>';}?>
						  </div>
						</div>
                    </li>

                    <li class="nav-item">
                       <span style="font-size: 1.5rem;"><i class="fa fa-shopping-cart"></i></span>
                    </li>

                    <li class="nav-item">
                        <span style="font-size: 1.5rem;"><i class="fa fa-globe"></i></span>
                    </li>
                </ul>
            </div>
        </nav>


   </header>
   

<section style="padding-top: 150px; width: 40%">
	<h2><?php echo $_SESSION['name'];?>님 반갑습니다!</h2>
	<a href="logout.php">로그아웃</a>
</section>

<footer>
	<figure>
		<img src="https://t1.daumcdn.net/friends/kfo-common/pc/bg_about_171213.png" alt="">
	</figure>
	<figure>
		<img src="https://t1.daumcdn.net/friends/kfo-common/pc/tit_newfriends.png" alt="">
	</figure>
</footer>
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
</body>
</html>