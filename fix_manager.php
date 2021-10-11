<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
include_once('connect.php');//連結資料庫
include_once("./globefunction.php") ;
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<title>修繕登記</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5\TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
	<script type='text/javascript'>
		function editconfirm(id)
		{ 
			var id;
			window.location.href = './fix_edit.php?id='+id;
		}
		function updateconfirm(id)
		{ 
			var id;
			window.location.href = './fix_update.php?id='+id;
		}
	</script>
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
		<?php
		 $sql_select="select * from fix where room !='' && item!='' order by id desc";
		 $result=mysql_query($sql_select);
		 $sql="select * from fix order by id desc";
		 
		 $result2=mysql_query($sql); 
		 $result1=mysql_query($sql_select);
		 $list=mysql_fetch_array($result2);
		 $show=mysql_num_rows($result1);
		 
		?>
		<div class="container">
			<div class="table-responsive">
				<table width="1200" border="0" class="table table-bordered table-condensed">
					<tr>
						<div class="row align-items-center">
							<td colspan="2" bgcolor="#CCCCCC">
								<div class="col-12 col-md-9 text-danger">
									<strong>*固定星期五請人維修</strong>
								</div>
							</td>
							<td colspan="2" bgcolor="#CCCCCC">
								<div class="col-12 col-md-9 text-danger">
									<strong>*夏天冷氣可非星期五維修</strong>
								</div>
							</td>
						</div>
					</tr>
					<tr>
						<table width="1200" border="0" class="table table-bordered table-condensed table-striped table-hover">
							<label><b>住宿生紀錄：</b></label>
							<thead>
								<tr width="100%">
								  <th><div align="center"><strong>日期</strong></div></th>
								  <th><div align="center"><strong>房號</strong></div></th>
								  <th><div align="center"><strong>報修姓名</strong></div></th>
								  <th><div align="center"><strong>報修項目及事由</strong></div></th>
								  <th><div align="center"><strong>處理情況</strong></div></th>
								  <th><div align="center"><strong></strong></div></th>
								</tr>
							</thead>
							<?php
							$sql_select="select * from fix order by id desc";
							
							$result=mysql_query($sql_select);
							while($list=mysql_fetch_array($result))
							{
								$num=0;

									$data_nums = mysql_num_rows($result2); //統計總比數
									$per = 10; //每頁顯示項目數量
									$pages = ceil($data_nums/$per); //取得不小於值的下一個整數
									if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
										$page=1; //則在此設定起始頁數
									} else {
										$page = intval($_GET["page"]); //確認頁數只能夠是數值資料
									}
									$start = ($page-1)*$per; //每一頁開始的資料序號
									$result2 = mysql_query($sql.' LIMIT '.$start.', '.$per) or die("Error");
							?>
							<tbody>
								<tr width="100%">
									<td><div align="center"><?php echo $list['date'];?></div></td>
									<td><div align="center"><?php echo $list['room'];?></div></td>
									<td><div align="center"><?php echo $list['name'];?></div></td>
									<td><div align="center"><?php echo $list['item'];?></div></td>
									<td><div align="center"><?php echo $list['operation'];?></div></td>
									<td><div align="center">
										<button id="btn" type="button" class="btn btn-outline-primary" alt="已處理" title="已處理" onclick="updateconfirm(<?php echo $list['id'];?>);">
											<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
											  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
											</svg>
										</button>
										<button id="btn" type="button" class="btn btn-outline-primary" alt="編輯" title="編輯" onclick="editconfirm(<?php echo $list['id'];?>);">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
											 <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
											 </svg>
										</button>
									</div></td>
										<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
										  <div class="modal-dialog" role="document">
											<div class="modal-content">
											  <div class="modal-header">
												<h5 class="modal-title" id="ModalLabel">處理情況</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											  </div>
											  <div class="modal-body">
												<form id="contentForm" method="post" action="./fix_update.php">
												  <div class="form-group">
													<label><input type="radio" id="operation" name="operation">已處理</label>
													<label><input type="radio" id="operation" name="operation">未處理</label>
												  </div>
												  <div class="form-group">
													<label for="detail" class="col-form-label">備註：</label>
													<input type="textarea" class="form-control" id="detail" name="detail" placeholder="">
												  </div>
												  <div class="modal-footer">
													<button type="submit" class="btn btn-primary" onClick="return call_data()">Save</button>
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												  </div>
												</form>
											  <div>
											</div>
										  </div>
										</div>
									</div>
								</tr>
							</tbody>
							<?php
							}
							?>
						</table>
					</tr>
				</table>
			</div>
		</div>
		<div class="page" align="center" style="color:#000000;">
			<?php
				$sql_select="select * from fix where name !='' &&  room !='' && item!='' && date !=''";
				
				$result=mysql_query($sql_select);
				$data_nums = mysql_num_rows($result2);
				
			echo ' <b>共 '.$data_nums.' 筆'; ?>
			<?php echo "<br/><b><a href=?page=1>第一頁</a> "; ?>
			<?php echo "第 ";
				for( $i=1 ; $i<=$pages ; $i++ )
				{
					if ( $page-3 < $i && $i < $page+3 )
					{
						echo "<a href=?page=".$i.">".$i."</a> ";
					}
				}
			?>
			<?php echo " 頁<a href=?page=".$pages.">末頁</a><br/><br/>"; ?>
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