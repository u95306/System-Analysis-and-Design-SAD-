<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
$_SESSION['name'];
$name=$_SESSION['name'];
include_once('connect.php');//連結資料庫
include_once("./globefunction.php") ;

	$datetime = date ("Y-m-d" , mktime( date('m'), date('d'), date('Y'))); 
	$date = $_POST['date'];
	$room = $_POST['room'];
	$time_leave = $_POST['time_leave'];
	$time_enter = $_POST['time_enter'];
	$note = $_POST['note'];
	
	
	
	if ($room=="")
	{
	?>
		<script>
			window.alert('房號不能為空');
			history.back();
			die();
		</script>
	<?php	
	}
	elseif ($time_leave=="")
	{
	?>
		<script>
			window.alert('離開時間不能為空');
			history.back();
			die();
		</script>
	<?php	
	}
	elseif ($time_enter=="")
	{
	?>
		<script>
			window.alert('進入時間不能為空');
			history.back();
			die();
		</script>
	<?php	
	}
	elseif ($note=="")
	{
	?>
		<script>
			window.alert('備註不能為空');
			history.back();
			die();
		</script>
	<?php	
	}
	else {
	$sql_insert= "insert into access(date, name, room, time_leave, time_enter, note) values('$date','$name','$room','$time_leave','$time_enter','$note')";
	if(mysql_query($sql_insert)){
		//echo "success";
		?>
			<script>
			alert("表單送出成功!");
			location.replace("./access_user.php");
			</script>
		<?php
	}
	else
	{
		//echo "fail";
	?>
		<script>
			alert("表單送出失敗");
			location.replace("./access_user.php");
		</script>
	<?php
	}
	}
?>