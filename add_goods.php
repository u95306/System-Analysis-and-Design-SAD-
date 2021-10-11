<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
include_once('connect.php');//連結資料庫
include_once("./globefunction.php") ;
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<title>新增物品</title>
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
		#color1{
			background-color: #3C3C3C;
			color:#ffffff;
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
		function moveNumbers(num) { 
			var txt=document.getElementById("title").value; 
			txt=txt + num + " "; 
			document.getElementById("title").value=txt; 
		} 
	</script>	
	<body>
		<div class="container">
			<div class="table-responsive">
				<form id="form1" name="form1" method="post" action="./goods_insert.php">
				  <table width="1200" border="0" class="table table-bordered table-condensed table-responsive">
					<tr>
					  <td id="color1" align="center"><strong>新增物品</strong></td>
					  <input name="date" type="hidden" id="date" value="<?=date('Y-m-d');?>" />
					</tr>
					<tr>
					  <td id="color"><strong>>>>物品名稱</strong></td>
					</tr>
					<tr>
					  <td align="center">
						<input type="text" name="goods_name" id="goods_name" class="form-control form-control-lg" placeholder="名稱">
					  </td>
					</tr>
					<tr>
					  <td id="color"><strong>>>>選擇分類</strong></td>
					</tr>
					<tr>
					  <td id="title1">
						<input type="button" value="書籍" name="no" onclick="moveNumbers(this.value)"> 
						<input type="button" value="日常用品" name="no" onclick="moveNumbers(this.value)"> 
						<input type="button" value="服飾" name="no" onclick="moveNumbers(this.value)"> 
						<input type="button" value="家電" name="no" onclick="moveNumbers(this.value)">
						<input type="button" value="娛樂" name="no" onclick="moveNumbers(this.value)">
						<input type="button" value="文具" name="no" onclick="moveNumbers(this.value)">
						<input type="button" value="其他" name="no" onclick="moveNumbers(this.value)">
						<input type="text" id="title" name="title" size="50"> 
					  </td>
					</tr>
					<tr>
					  <td id="color">
						<strong>>>>內容</strong>
					  </td>
					</tr>
					<tr>
					  <td align="center">
						<textarea name="content" cols="115" rows="5" id="content"></textarea>
					  </td>
					</tr>
					<tr>
					  <td id="color">
						<strong>>>>賣家資訊</strong>
					  </td>
					</tr>
					<tr>
					  <td align="center">
						<textarea name="contact" cols="115" rows="3" id="contact"></textarea>
					  </td>
					</tr>
					<tr>
					  <td id="color">
						<strong>>>>圖片</strong>
					  </td>
					</tr>
					<tr>
					  <td align="center" id="picture">
					　　<label>選擇圖片：<input type="file" name="file" id="file"></label>
					  </td>
					</tr>
					<tr>
					  <td id="color">
						<div class="btn-group">
							<button class="btn btn-outline-dark" type="submit" onClick="return call_data()">新增物品</button>
							<a href="second_hand_user.php"><button class="btn btn-outline-dark" type="button">回瀏覽頁</button></a>
						</div>
					  </td>
					</tr>
				  </table>
				</form>
			</div>
		</div>
		<div class="navbar-fixed-bottom"><?php echo showfooter() ?></div>
	</body>
</html>