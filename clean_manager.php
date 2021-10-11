<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
include_once('connect.php');//連結資料庫
include_once("./globefunction.php") ;
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<title>掃區登記</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style_index.css">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	<header>
		<nav class="navbar navbar-dark bg-dark navbar-expand-md">
			<h1 class="mr-auto">大慶女宿管理系統</h1>
		</nav>
	</header>
	<body>
		<nav class="nav navbar-inverse navbar-dark navbar-expand-md bg-secondary">
		<!-- 選單內容 -->
		    <div class="col d-flex align-items-center justify-content-center" id="menu">
				<ul class="navbar-nav">
					<li class="nav-item"><a href="./index_manager_1.php" class="nav-link">首頁</a></li> &nbsp;&nbsp;&nbsp;&nbsp;
					<li class="nav-item"><a href="./fix_manager.php" class="nav-link">修繕登記</a></li> &nbsp;&nbsp;&nbsp;&nbsp;
					<li class="nav-item"><a href="./package_manager.php" class="nav-link">包裹領取登記</a></li> &nbsp;&nbsp;&nbsp;&nbsp;
					<li class="nav-item"><a href="./second_hand_manager.php" class="nav-link">二手買賣</a></li> &nbsp;&nbsp;&nbsp;&nbsp;
					<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" data-submenu="" aria-expanded="true" href="#">掃區/冰箱登記<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="dropdown dropright dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="./clean_manager.php">掃區登記</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">E-01</a>
									<li><a class="dropdown-item" href="#">E-02</a>
									<li><a class="dropdown-item" href="#">E-03</a>
									<li><a class="dropdown-item" href="#">E-04</a>
									<li><a class="dropdown-item" href="#">E-05</a>
									<li><a class="dropdown-item" href="#">E-06</a>
								</ul>
							</li>
							<li class="dropdown dropright dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="./refrigerator_manager.php">冰箱申請</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">E-01</a>
									<li><a class="dropdown-item" href="#">E-02</a>
									<li><a class="dropdown-item" href="#">E-03</a>
									<li><a class="dropdown-item" href="#">E-04</a>
									<li><a class="dropdown-item" href="#">E-05</a>
									<li><a class="dropdown-item" href="#">E-06</a>
								</ul>
							</li>
						</ul>
					</li> &nbsp;&nbsp;&nbsp;&nbsp;
					<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">外宿/訪客登記<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="./access_manager.php">外宿登記</a></li>
							<li><a class="dropdown-item" href="./visitor_manager.php">訪客登記</a></li>
						</ul>
					</li>
				</ul>
		    </div>
			<div class="btn-group dropleft">
				<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
					</svg>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">住宿生資訊</a>
					<a class="dropdown-item" href="#">說明</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="login_1.php">登出</a>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4"><a href="#"><li>E-01</li></a></div>
				<div class="col-12 col-md-4"><a href="#"><li>E-02</li></a></div>
				<div class="col-12 col-md-4"><a href="#"><li>E-03</li></a></div>
			</div>
			<div class="row">
				<div class="col-12 col-md-4"><a href="#"><li>E-04</li></a></div>
				<div class="col-12 col-md-4"><a href="#"><li>E-05</li></a></div>
				<div class="col-12 col-md-4"><a href="#"><li>E-06</li></a></div>
			</div>
		</div>
		<div class="navbar-fixed-bottom"><?php echo showfooter() ?></div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<button type="button" id="BackTop" class="toTop-arrow"></button>
		<script>
		$(function(){
			$('#BackTop').click(function(){ 
				$('html,body').animate({scrollTop:0}, 333);
			});
			$(window).scroll(function() {
				if ( $(this).scrollTop() > 300 ){
					$('#BackTop').fadeIn(222);
				} else {
					$('#BackTop').stop().fadeOut(222);
				}
			}).scroll();
		});
		</script>
	</body>
</html>