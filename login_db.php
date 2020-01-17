<?php
include_once './db/db_con.php';
    $id   = $_POST["id"];
    $pass = $_POST["pw"];

   $sql = "select * from members where id='$id'";
   $result = mysqli_query($con, $sql);

   $num_match = mysqli_num_rows($result);

   if(!$num_match) 
   {
     echo"
           	<script>
            	window.alert('등록되지 않은 아이디입니다!')
               	history.go(-1)
           	</script>
         ";
    }  //history.go(-1) 한칸뒤로가기 
    else
    {
        $row = mysqli_fetch_array($result);  
        $db_pass = $row["pass"]; //db에서 넘어온 pass
		
        //exit; 하고 print_r로 찍어보기 -> 디버깅 하는법
        mysqli_close($con);
		
        //$pass는 프론트에서 입력해 넘어온 pw 
        if($pass != $db_pass)
        {

           echo("
              <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
              </script>
           ");
           exit;
        }
        else
        {
            session_start();
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["name"];

            echo"
              <script>
                location.href = 'index.php';
              </script>
            ";
        }
     }        
?>
