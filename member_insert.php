<?php
	include_once './db/db_con.php';

    $id   = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email  = $_POST["email"];
    $address = $_POST["address"];
	$phone = $_POST["phone"];
 
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

  
	$sql = "insert
				members
			set
				id='$id',
				pass='$pass',
				name='$name',
				email='$email',
				regist_day='$regist_day',
				address='$address',
				phone='$phone' 
			";   //숫자가 들어가도 '' 쓰는게 좋음 

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     
	
	     
?>
		<script>
    		  alert('회원가입 완료')
	          location.href = './login.php';
	      </script>
	 
   
