<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
require('connect.php');//連結資料庫
include_once("./globefunction.php") ;
	$id_num = $_GET['id'];
	$operation = $_POST['operation'];
	
	$sql_update= "update fix set operation='已處理' where id='$id_num '";
	if(mysql_query($sql_update)){
		//echo "success";
		?>
			<script>
			alert("送出成功!");
			location.replace("./fix_manager.php");
			</script>
		<?php
	}
	else
	{
		//echo "fail";
	?>
		<script>
			alert("送出失敗");
			location.replace("./fix_manager.php");
		</script>
	<?php
	}
?>