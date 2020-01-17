<?php
	!empty($_POST['id']) ? $id = $_POST['id'] : $id=''; //post 값이 있다면 (빈공간이 아니라면)
	$ret['check'] = false;
	$hacjum['COM'] = 'A+';
	$hacjum['SERVER'] = 'A';
	
	$ret['hacjum']=$hacjum;
	$arr[0] = $hacjum;
	$arr[1] = $hacjum;
	
	
	if($id != ""){ // id 값이 있다면
		$con = mysqli_connect("localhost", "user1", "12345", "sample");
		$sql = "select
					id
				from
					members
				where
					id = '{$id}'
				";
		$result = mysqli_query($con, $sql);
		$num = mysqli_num_rows($result); //행의 갯수 만약 id가 있어서 1개가 추출되면 1이 되고 1 이면 중복
		
		if($num==0){
			$ret['check'] = true;
		}
	}
	echo json_encode($ret);  //json으로 출력 
?>