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
	$item = $_POST['item'];
	
	$sql = "select * from logintable where account = '$account' and password='$password'";//檢測資料庫是否有對應的username和password的sql
	$result = mysql_query($sql);//執行sql
	$rows=mysql_num_rows($result);//返回一個數值
	$list=mysql_fetch_array($result);
	
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
	elseif ($item=="")
	{
	?>
		<script>
			window.alert('報修項目及事由不能為空');
			history.back();
			die();
		</script>
	<?php	
	}
	else {
	$sql_insert= "insert into fix(date, room, name, item) values('$date','$room','$name','$item')";
	if(mysql_query($sql_insert)){
		//echo "success";
		?>
			<script>
			alert("表單送出成功!");
			location.replace("./fix_user.php");
			</script>
		<?php
	}
	else
	{
		//echo "fail";
	?>
		<script>
			alert("表單送出失敗");
			location.replace("./fix_user.php");
		</script>
	<?php
	}
	}
?>