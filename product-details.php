<?php 
include_once './db/db_con.php';
include_once './config.php';
$no1 = $_GET['no'];
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
															<li class="dropdown">

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
			
				<?php 
				$sql = "select * from shop_data where no=$no1";
				$result = mysqli_query($con, $sql);
				$row = mysqli_fetch_array($result);
				$no2= $row['no'];
				$name= $row['name'];
				$comment= $row['comment'];
				$memo= $row['memo'];
				$price= $row['price'];
				$img= $row['img'];
				
				$sql = "select img,no from shop_data";
				$result2 = mysqli_query($con, $sql);
				$row2 = mysqli_fetch_array($result2);
				
				
				?>
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--상품 디테일-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?=$img?>" alt="" />
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								  
								    <div class="carousel-inner">
								  
								  
										<div class="item active">
										<?php while ($row2 = mysqli_fetch_array($result2)){ ?>
											<a href="http://127.0.0.1/shop/product-details.php?no=<?=$row2['no']?>">
											<img src="<?=$row2['img']?>" alt="" style="width: 70xp; height: 70px"></a>
										  <?php }?>
										</div>
									
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<form action="./cart_insert.php?no=<?=$no2?>" method="POST">
								<h2><?=$name?></h2>
								<p>상품번호: <?=$no2?></p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span><?=$price?></span>
									<label>수량:</label>
									<input type="text" name="quantity" value="1"/>
									<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										장바구니 추가
									</button>
								</span>
								<p><b>제품 정보:</b> <?=$comment?></p>
								</form>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					<hr>
					<div>
					<br><br><br>
					<?=$memo?>
					<img src="<?=$img?>" alt="" />
					
					</div>
				</div>
			</div>
		</div>
	</section>

					<br><br><br><br><br><br><br><br>


</body>
</html>