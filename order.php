<?php 
	include_once './db/db_con.php';
	include './config.php';

	$session_id=session_id();
	
	$sql = "select * from shop_temp where session_id='$session_id'";
	$result = mysqli_query($con, $sql);
	
	
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
												<?php
					    if(!$userid) {
									?>                
									<li><a href="order_list.php"><i class="fa fa-shopping-cart"></i>주문정보</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> 장바구니</a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> 로그인</a></li>
								<li><a href="sign.php"><i class="fa fa-lock"></i> 회원가입</a></li>
									<?php
									    } else {
									                $logged = $username."(".$userid.")님 환영합니다.";
									?>
									<li><a><i></i> <?=$logged ?></a></li>
									<li><a href="order_list.php"><i class="fa fa-shopping-cart"></i>주문정보</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> 장바구니</a></li>
								<li><a href="./logout.php"><i class="fa fa-lock"></i> 로그아웃</a></li>
								<li><a href="#"><i class="fa fa-lock"></i> 정보수정 </a></li>
									<?php
									    }
									?>
							  
								
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
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
								<ul role="menu" class="sub-menu">
								<li><a href="shop.php">Products</a></li>
								<li><a href="product-details.php">Product Details</a></li>
								<li><a href="checkout.php">Checkout</a></li>
								<li><a href="cart.php">Cart</a></li>
								<li><a href="login.php" class="active">Login</a></li>
								</ul>
								</li>

								</ul>
								</div>
								</div>
												</div>
				</div>
				</div><!--/header-bottom-->
				</header><!--/header-->

		
	<section id="cart_items">
		<div class="container">
		
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			<h3 style="color: gray;">주문자 정보 입력</h3>
			</div>
			<div class="table-responsive cart_info">
				<form action="./order_db.php" method="POST">
					<table>
					<tr>
					<td>이름
					<td><input type="text" name="name">
					</tr>
					<tr>
					<td>이메일
					<td><input type="text" name="email">
					</tr>			
					<tr>
					<td>전화번호
					<td><input type="text" name="phone">
					</tr>
					<tr>
					<td>주소
					<td><input type="text" style="width: 300px;" value="" name="address">
					</tr>
					<tr>
					<td>요구사항
					<td><textarea cols="30" rows="5" name="memo"></textarea>
					</tr>						
					</table>
				
			</div>
		</div>
		<div style="text-align:center; color: orange;">
			<button type="submit" class="btn btn-default" onclick="location.href='./order_db.php'" style="color: orange;">주문하기</button>
		</div>
			</form>
	</section> <!--/#cart_items-->
								
					<br><br><br><br>
	

</body>
</html>