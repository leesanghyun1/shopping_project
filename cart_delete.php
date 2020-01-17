<?php 
include_once './db/db_con.php';
$no = $_GET['no'];


session_start();
$session_id=session_id();

$sql = "delete from shop_temp where no='$no' and session_id='$session_id'";
mysqli_query($con, $sql);

?>
<script>
	
	location.href='./cart.php'
</script>