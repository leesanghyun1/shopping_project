<?php 
	include_once './db/db_con.php';
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$memo = $_POST['memo'];
	

	session_start();
	$session_id=session_id();
	
	$order_id = date("Ymdhis");
	$regdate=time();
	
	$sql2 = "select sum(price*count) from shop_temp where session_id='$session_id'";
	$result2 = mysqli_query($con, $sql2);
	$row2 = mysqli_fetch_array($result2);
	$total=$row2[0];
	
	
	$sql = "insert into shop_list(order_id,name,email,phone,address,memo,regdate,total)
			values('$order_id','$name','$email','$phone','$address','$memo','$regdate','$total')";    
	mysqli_query($con, $sql);
	$sql = "select * from shop_temp where session_id='$session_id'";
	$result = mysqli_query($con, $sql);
	
	while ($row = mysqli_fetch_array($result)){
		$ql = "insert into shop_order(order_id,name,parent,count,price,money,regdate,img,total)
				values('$order_id','$row[name]','$row[parent]','$row[count]'
						,'$row[price]','$row[money]','$row[regdate]','$row[img]',$total)";
		mysqli_query($con, $ql);
	}
	
	$sql = "delete from shop_temp where session_id='$session_id'";
	$result = mysqli_query($con, $sql);
	
?>
<script>
		location.href='./order_list.php';
</script>