<?php 
include_once './db/db_con.php';
include_once './config.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Login | E-Shopper</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/price-range.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="./js/jquery-1.10.2.min.js"></script>

  
<script>

	$(function(){
		$("#id").blur(function(){
			if($(this).val() == ""){
				$("#id_check_msg").html("아이디를 입력 해주세요.").css("color","red").attr("data-check","0");
			}else{
				checkIdAjax();
			}	
		}); // input id='id' 애에 포커스가 잃어 버릴때 발생하는 이벤트
	}); //문서가 로드되면

	function checkIdAjax(){
		// id 값을 post로 전송해서 서버와 통신하여 중복 결과 json 형태로 받아오는 함수
		$.ajax({
			url : "./ajax/check_id.php",
			type : "post",
			dataType : "json",
			data : {
				"id" : $("#id").val()
			},
			success : function(data){
				// {"check":false,"id":"kkk","name":"\ud64d\uae38\ub3d9","hacjum":{"com":"A","server":"A+","db":"C"}}
				// alert(data.hacjum[0].com);
				// alert(data.hacjum[1].com);
				
				if(data.check){
					$("#id_check_msg").html("사용 가능한 아이디 입니다.").css("color","blue").attr("data-check","1");
				}else{
					$("#id_check_msg").html("중복된 아이디 입니다.").css("color","red").attr("data-check","0");
				}
			}
		});
	}
/* 
    <div class="col2">
		<input type="text" name="id" id="id" style="width: 150px;">
		&nbsp;
		<span id="id_check_msg" data-check="0"></span>
	</div> 	
	
 */
	
	$(function(){
		$("#save_frm").click(function(){
			check_input();
		});
	});


   function check_input(){

	  // document.member_form.id.value == $("#id").val() 
      if (!$("#id").val()) {
          alert("아이디를 입력하세요!");    
          //document.member_form.id.focus();
          $("#id").focus();
          return;
      }

      if($("#id_check_msg").attr("data-check") == "0"){
          alert("아이디 중복 다시 하십시요.");    
          $("#id").focus();
          return;		
      }

      if (!document.member_form.pass.value) {
          alert("비밀번호를 입력하세요!");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value) {
          alert("비밀번호확인을 입력하세요!");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value) {
          alert("이름을 입력하세요!");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.email1.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.email1.focus();
          return;
      }


      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }
		$("#member_form").submit();
      //document.member_form.submit();
   }

   function reset_form() {
      document.member_form.id.value = "";  
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.email.value = "";
      document.member_form.id.focus();
      return;
   }

   function check_id() {
     window.open("member_check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
   }
</script>  
    
    
    

<body>
<header id="header"><!--header-->
<div class="header_top"><!--header_top-->
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="contactinfo">
						</div>
						</div>
						
					</div>
					</div>
					</div><!--/header_top-->

					<div class="header-middle"><!--header-middle-->
					<div class="container">
					<div class="row">
					<div class="col-md-4 clearfix">
					<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="메인 이미지" /></a>
									</div>
							</div>
																	<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
						<ul class="nav navbar-nav">
								<li><a href="order_list.php"><i class="fa fa-shopping-cart"></i>주문정보</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> 장바구니</a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> 로그인</a></li>
								<li><a href="sign.php"><i class="fa fa-lock"></i> 회원가입</a></li>
								</ul>
								</div>
								</div>
								</div>
								</div>
								</div><!--/header-middle-->

								<div class="header-bottom"><!--header-bottom-->
								<div class="container">
								<div class="row">
								<div class="col-sm-9">
								<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											</button>
						</div>
						<div class="mainmenu pull-left">
						<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home</a></li>
								

								</ul>
								</div>
								</div>
												</div>
				</div>
				</div><!--/header-bottom-->
				</header><!--/header-->
	<section>
			<div class="container">
				<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">나무 </a></li>
											<li><a href="#">철제</a></li>
										
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											책상
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">나무</a></li>
											<li><a href="#">철제</a></li>
										
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											의자
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">나무</a></li>
											<li><a href="#">철제</a></li>
											
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">선반</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">탁자</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						
						
					
					</div>
				</div>
						<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						
				
				<form  name="member_form" id="member_form" method="post" action="member_insert.php">
			    <h2>회원 가입</h2>
    		    	<div class="form id">
				        <div class="col1">아이디</div>
				        
							<input type="text" name="id" id="id" style="width: 150px;">
							&nbsp;
							<span id="id_check_msg" data-check="0"></span>
			       	</div>
			       	<div class="clear"></div>

			       	<div class="form">
				        <div class="col1">비밀번호</div>
				        <div class="col2">
							<input type="password" name="pass">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">비밀번호 확인</div>
				        <div class="col2">
							<input type="password" name="pass_confirm">	
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">이름</div>
				        <div class="col2">
							<input type="text" name="name">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form email">
				        <div class="col1" style="display: inline;">이메일
							<input type="text" name="email">
				        </div>                 
			       	</div>
			       	<div class="col1" style="display: inline;">주소
							<input type="text" name="address">
				        </div> 
				         	<div class="col1" style="display: inline;">전화번호
							<input type="text" name="phone">
				        </div> 
						<button type="submit" class="btn btn-default" style="display: inline;" onclick="">확인</button>
			      
           	</form>
           
						</div>
							</div>						
								</div>
									</div>
					</section>
<br><br><br><br>

</body>
</html>