<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
include_once('connect.php');//連結資料庫
include_once("./globefunction.php") ;
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<title>新增公告</title>
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
	<style>
		#heig{
			height:10px;
		}
		#color{
			background-color: #E5E5E5;
		}
	</style>
	<script type="text/javascript">
		function call_data(){
			if (confirm ("確定送出嗎?")){ 
			//alert("" )    
			}
			else{
			return false;
			}
		}
	</script>	
	<body>
		<div class="container">
			<div class="table-responsive">
				<form id="form1" name="form1" method="post" action="./news_insert.php">
				  <table width="1200" border="0" class="table table-bordered table-condensed table-responsive">
					<tr>
					  <td id="color" align="center"><strong>新增公告</strong></td>
					</tr>
					<tr>
					  <td><div align="center">
						<input style="font-size:16px" class="form-control form-control-lg" name="title" type="text" placeholder="標題">
						<input name="date" type="hidden" id="date" value="<?=date('Y-m-d');?>" />
					  </div>
						<label>
						<div align="center"></div>
						</label></td>
					</tr>
					<tr>
					  <td id="color"><strong>>>>內容</strong></td>
					</tr>
					<tr>
					  <td align="center">
						<textarea name="content" cols="110" rows="7.5" id="content"></textarea>
					  </td>
					</tr>
					<tr>
					  <td id="color">
						<strong>>>>連結</strong>
					  </td>
					</tr>
					<tr>
					  <td align="center">
						<textarea name="link" cols="110" rows="2" id="link"></textarea>
					  </td>
					</tr>
					<tr>
					  <td id="color">
						<div class="btn-group">
							<button class="btn btn-outline-dark" type="submit" onClick="return call_data()">新增公告</button>
							<a href="index_manager_1.php"><button class="btn btn-outline-dark" type="button">回首頁</button></a>
						</div></td>
					</tr>
				  </table>
				</form>
			</div>
		</div>
		<div class="navbar-fixed-bottom"><?php echo showfooter() ?></div>
	</body>
</html>