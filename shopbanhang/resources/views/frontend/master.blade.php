<!DOCTYPE html>
<html>
<head>
	<base href="{{asset('public/frontend')}}/">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>HAN-SHOP | @yield('title')</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" 
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="icon" href="img/Logo1.png" type="img/x-icon">
	<link rel="stylesheet" href="css/home.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
</head>
<body>    
	<!-- header -->
	<header id="header">
		<div class="container">
			<div class="row">
				<div id="logo" class="col-md-3 col-sm-12 col-xs-12">
					<h1>
						<a href="{{asset('/')}}"><img src="img/logo.png"></a>						
						<nav><a id="pull" class="btn btn-danger" href="#">
							<i class="fa fa-bars"></i>
						</a></nav>			
					</h1>
				</div>
				
				<form method="get" role="search" action="{{asset('search/')}}">
				<div id="search" class="col-md-7 col-sm-12 col-xs-12">
					<input type="text" name="result" placeholder="Tìm kiếm sản phẩm...">
					<input type="submit" name="" value="Tìm Kiếm">
				</div>
				<div id="cart" class="col-md-2 col-sm-12 col-xs-12">
					<a class="display" href="{{asset('cart/show')}}">Giỏ hàng</a>
					<a href="{{asset('cart/show')}}">{{Cart::count()}}</a>			    
				</div>
				</form>
			</div>			
		</div>
	</header><!-- /header -->
	<!-- endheader -->

	<!-- main -->
	<section id="body">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="col-md-3">
					<nav id="menu">
						<ul>
							<li class="menu-item">danh mục sản phẩm</li>
							@foreach($categories as $cate)
							<li class="menu-item"><a href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}">
								{{$cate->cate_name}}</a></li>
							@endforeach					
						</ul>
						<!-- <a href="#" id="pull">Danh mục</a> -->
					</nav>

					<div id="banner-l" class="text-center">
						<div class="banner-l-item">
							<a href="#"><img src="img/home/slide7.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/slide8.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/slide8.png" alt="" class="img-thumbnail"></a>
						</div>						
						<div class="banner-l-item">
							<a href="#"><img src="img/home/slide9.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/slide10.jpg" alt="" class="img-thumbnail"></a>
						</div>
					</div>
				</div>

				<div id="main" class="col-md-9">
					<!-- main -->
					<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
					<div id="slider">
						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img width="900px" src="img/home/slide1.png" alt="Los Angeles" >
								</div>
								<div class="carousel-item">
									<!-- <img width="900px" src="img/home/slide6.jpg" alt="Chicago"> -->
								</div>
								<div class="carousel-item">
									<!-- <img width="900px" src="img/home/slide7.jpg" alt="New York" > -->
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</div>

					<div id="banner-t" class="text-center">
						<div class="row">
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="img/home/slide5.jpg" alt="" class="img-thumbnail"></a>
							</div>
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="img/home/slide6.jpg" alt="" class="img-thumbnail"></a>
							</div>
						</div>					
					</div>
                    <!-- -------------main---------------- -->
                        @yield('main')
                    </div>
			</div>
		</div>
	</section>
	<!-- endmain -->
	<!-- footer -->
	<!-- <footer id="footer">			
		<div id="footer-t">
			<div class="container">
				<div class="row">				
					<div id="logo-f" class="col-md-3 col-sm-12 col-xs-12 text-center">						
						<a href="#"><img src="img/home/logo.png"></a>		
					</div>
					<div id="about" class="col-md-3 col-sm-12 col-xs-12">
						<h3>About us</h3>
						<p class="text-justify">Vietpro Academy thành lập năm 2009. Chúng tôi đào tạo chuyên sâu trong 2 lĩnh vực là Lập trình Website & Mobile nhằm cung cấp cho thị trường CNTT Việt Nam những lập trình viên thực sự chất lượng, có khả năng làm việc độc lập, cũng như Team Work ở mọi môi trường đòi hỏi sự chuyên nghiệp cao.</p>
					</div>
					<div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Hotline</h3>
						<p>Phone Sale: (+84) 0988 550 553</p>
						<p>Email: sirtuanhoang@gmail.com</p>
					</div>
					<div id="contact" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Contact Us</h3>
						<p>Address 1: B8A Võ Văn Dũng - Hoàng Cầu Đống Đa - Hà Nội</p>
						<p>Address 2: Số 25 Ngõ 178/71 - Tây Sơn Đống Đa - Hà Nội</p>
					</div>
				</div>				
			</div>
			<div id="footer-b">				
				<div class="container">
					<div class="row">
						<div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>Học viện Công nghệ Vietpro - www.vietpro.edu.vn</p>
						</div>
						<div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>© 2017 Vietpro Academy. All Rights Reserved</p>
						</div>
					</div>
				</div>
				<div id="scroll">
					<a href="#"><img src="img/home/scroll.png"></a>
				</div>	
			</div>
		</div>
	</footer> -->
	<!-- endfooter -->
	<div class="app-container">
	<p>Tải ứng dụng HAN-SHOP</p>
	<div class="app-google">
		<img src="img/appstore.png">
		<img src="img/googleplay.png">
	</div>
	<p>Nhận bản tin HAN-SHOP</p>
	<input type="text" placeholder="Nhập email của bạn...">
</div>
<!-- ------------------------footer------------------------->
<div class="footer-top">
<li><a href=""><img src="img/img-congthuong.png" alt=""></a></li>
<li><a href=""></a>Liên Hệ</li>
<li><a href=""></a>Tuyển dụng</li>
<li><a href=""></a>Giới thiệu</li>

<li>
	<a target="_blank"  href="https://www.facebook.com/hieulee0412"  style="color: #0b84ed; text-decoration: none;" href="" class="fab fa-facebook-f"></a>
	<a style="color: #1e9bf0; text-decoration: none;" href="" class="fab fa-twitter"></a>
	<a style="color: #ff0f17; text-decoration: none;" href="" class="fab fa-youtube"></a>
</li>
</div>
<div class="footer-center">
Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 1011029381 <br>
<strong>Địa chỉ đăng ký:</strong> Trần Địa Nghĩa, Ngũ Hành Sơn, Đà Nẵng, Việt Nam <br>
<strong>Số điện thoại:</strong> 0399.824.061
<p>
</div>
<div class="footer-bottom">
<table bgcolor="#e3e3f2">
<!-- được sử dụng để di chuyển chữ hoặc ảnh theo chiều ngang hoặc dọc một cách tự động. -->
	<Marquee 
	Behavior="scroll"  Direction=""
	Loop=n1  		    ScrollAmount=n2 
	ScrollDelay=n3		BgColor="#e3e3f2"> 
	<strong>©HAN-SHOP All rights reserved</strong>
</Marqueee>
</table>
</div>

</body>
</html>