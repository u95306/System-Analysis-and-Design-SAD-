<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
include_once('connect.php');//連結資料庫
$id_num = $_GET['id'];
$delete = "delete from access where id = '$id_num' ";
?>
<?php
	if(mysql_query($delete)){
		//echo "success";
		?>
			<script>
				alert("刪除成功");
				location.replace("./access_user.php");
			</script>
		<?php
	}
	else{
		//echo "fail";
		?>
			<script>
				alert("刪除失敗");
				history.back();
			</script>
		<?php
		
	}
?>
