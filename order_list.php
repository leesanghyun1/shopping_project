<?php 
	include_once './db/db_con.php';
	include './config.php';
	$session_id=session_id();
	
	$sql1 = "select * from shop_list";
	$result1 = mysqli_query($con, $sql1);
		
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
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">주문번호</td>
							<td class="description">주문자</td>
							<td class="price">전체금액</td>
							<td class="quantity">현재상태</td>
							
						</tr>
					</thead>
				
					<tbody>
					<?php while ($row1 = mysqli_fetch_array($result1)){?>
						<tr>
							<td>
								<p><a href="order_view.php?order_id=<?=$row1['order_id']?>"> <?=$row1['order_id'] ?></a></p>
							</td>
							<td>
								<p><?=$row1['name'] ?></p>
							</td>
							
							<td class=""> 
								<p class="cart_total_price"><?=$row1['total']?></p>
							</td>
							<td>
								<p>주문접수</p>
							</td>
							
							
						
						<?php }?>
						
						</tr>
						
						
					</tbody>
				</table>
			</div>
		</div>
		
		
	</section> <!--/#cart_items-->
								
					<br><br><br><br>
	

</body>
</html>