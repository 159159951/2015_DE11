<?php 
@session_start();
include("ketnoi.php");
if(isset($_SESSION['error'])){
	echo "<script>alert('{$_SESSION['error']}');</script>";
	//Tranh cho truong hop refresh lai trang thi bi script bao loi
	unset($_SESSION['error']);
}
	



?>


<!DOCTYPE html>
<html lang="en">

<head>

	<script src="detect.js-v=0701" tppabs="http://fptshop.com.vn/Content/Publishing/js/detect.js?v=0701"></script>
	<title>Laptop - Máy tính xách tay Asus - Fptshop.com.vn</title>
	<meta name="description" content="Sản phẩm Laptop Asus chính hãng được cung cấp tại FPTShop với mức giá ưu đãi cùng những phần quà lớn dành cho người sử dụng." />
	<meta name="keywords" content=" Laptop Asus, mua laptop Asus, giá laptop asus, laptop asus nào tốt, laptop asus mua ở đâu" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width" />
	<meta name="copyright" content="Công ty Cổ phần Bán lẻ Kỹ thuật số FPT" />
	<meta name="author" content="Công ty Cổ phần Bán lẻ Kỹ thuật số FPT" />
	<meta http-equiv="audience" content="General" />
	<meta name="resource-type" content="Document" />
	<meta name="distribution" content="Global" />
	<meta name="revisit-after" content="1 days" />
	<meta name="GENERATOR" content="Công ty Cổ phần Bán lẻ Kỹ thuật số FPT" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.fptshop.com.vn/may-tinh-xach-tay/asus">
	<meta name="ROBOTS" content="INDEX, FOLLOW" />
	<meta name="adx:sections" content="M&#225;y t&#237;nh x&#225;ch tay/Asus" />
	<meta name="adx:objects" content="301" />
	<meta name="adx:authors" content="" />
	<meta name="adx:users" content="" />
	<link href="..\css\css-v=s0sTbq4cCKHhaWgXBsoPjjc9d-zjr1P1RNAaeFhDWbc1.css" rel="stylesheet" />
	<link href="..\css\listproduct.css-v=3110.css" rel="stylesheet" />
	<link href="..\css\fixlistproduct.css-v=3110.css" rel="stylesheet" />
	<link href="..\css\jquery.jcarousel.css-v=3110.css" rel="stylesheet" />
	<link href="..\css\breadcrumbs.css-v=3110.css" rel="stylesheet" />
	<script src="modernizr.custom.88262.js-v=0701" tppabs="http://fptshop.com.vn/Content/Publishing/js/modernizr.custom.88262.js?v=0701"></script>
	<script src="jquery-1.10.2.min.js-v=0701" tppabs="http://fptshop.com.vn/Content/Publishing/js/jquery-1.10.2.min.js?v=0701"></script>
	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'analytics.js' /*tpa=http://www.google-analytics.com/analytics.js*/ , 'ga');
		
		ga('create', 'UA-36867340-1', 'auto');
		ga('send', 'pageview');
		ga('require', 'ecommerce', 'ecommerce.js' /*tpa=http://fptshop.com.vn/may-tinh-xach-tay/ecommerce.js*/ );
	</script>
	<!-- ANTS Analytics -->
	<script type="text/javascript">
		var _siteId = "512046464";
		(function() {
			var e = document.createElement("script");
			e.type = "text/javascript", e.async = !0, e.src = "adx.js" /*tpa=http://st.a.anthill.vn/adx.js*/ ;
			var t = document.getElementsByTagName("script")[0];
			t.parentNode.insertBefore(e, t)
		})();
	</script>
	<script>
		(function() {
			var _fbq = window._fbq || (window._fbq = []);
			if (!_fbq.loaded) {
				var fbds = document.createElement('script');
				fbds.async = true;
				fbds.src = 'fbds.js' /*tpa=http://connect.facebook.net/en_US/fbds.js*/ ;
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(fbds, s);
				_fbq.loaded = true;
			}
			_fbq.push(['addPixelId', '498842276926206']);
		})();
		window._fbq = window._fbq || [];
		window._fbq.push(['track', 'PixelInitialized', {}]);
	</script>
	<noscript>
		<img height="1" width="1" alt="" style="display: none" src="tr-id=498842276926206&ev=NoScript" tppabs="https://www.facebook.com/tr?id=498842276926206&ev=NoScript" />
	</noscript>
	<!-- Facebook Conversion Code for FPT Shop Order -->
	<script>
		(function() {
			var _fbq = window._fbq || (window._fbq = []);
			if (!_fbq.loaded) {
				var fbds = document.createElement('script');
				fbds.async = true;
				fbds.src = 'fbds.js' /*tpa=http://connect.facebook.net/en_US/fbds.js*/ ;
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(fbds, s);
				_fbq.loaded = true;
			}
		})();
		window._fbq = window._fbq || [];
		window._fbq.push(['track', '6021652195858', {
			'value': '0.00.htm' /*tpa=http://fptshop.com.vn/may-tinh-xach-tay/0.00*/ ,
			'currency': 'VND'
		}]);
	</script>
	<noscript><img height="1" width="1" alt="" style="display:none" src="tr-ev=6021652195858&cd[value]=0.00&cd[currency]=VND&noscript=1" tppabs="https://www.facebook.com/tr?ev=6021652195858&cd[value]=0.00&cd[currency]=VND&noscript=1" /></noscript>
</head>

<body>
	<div id="homepage">
		<div class="page">
			<!-- Header -->
			<header class="fshop-header">
				<div class="fshop-header-83right"></div>
				<div class="wrapper clearfix">
					<h1 class="fshop-logo">
						<a href="javascript:if(confirm('http://fptshop.com.vn/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://fptshop.com.vn/'" tppabs="http://fptshop.com.vn/"> <strong>fptshop.com.vn</strong> </a>
					</h1>
				</div>
				<div class="flash">
					<object width="180" height="60">
						<embed src="slogan.swf" tppabs="http://fptshop.com.vn/Content/flash/slogan.swf" width="180" height="60" quality="high"
							pluginspage="http://www.macromedia.com/go/getflashplayer"
							type="application/x-shockwave-flash" menu="false" wmode="transparent">
						</embed>
					</object>
				</div>
				<div class="fhop-search search">
					<div class="wrap">
						<form>
							<input name="tukhoa" type="text" class="text keyword" value="" placeholder="Bạn muốn tìm gì?">
							<input type="submit" class="submit btnSearch" value="Tìm kiếm">
						</form>
					</div>
					<div class="resultAutoComplete"></div>
				</div>
				<div class="fshop-support"> Tư vấn miễn phí <br /> <strong>1900 6606</strong> </div>
				<div class="fshop-store"><a target="_blank" href="" tppabs="http://fptshop.com.vn/cua-hang" title="Cửa hàng FPTShop">Danh Sách Cửa hàng</a></div>
				<div class="fshop-login-reg">
					<?php 
					if(isset($_SESSION['customer']))
					{
						$query= mysql_query("Select * from customer where Id= {$_SESSION['customer']}",$connect);
						$result = mysql_fetch_array($query);
						$customer_fullname = $result["FullName"];
						echo "Xin chào ".$customer_fullname;
						echo "<a href=logout.php> Logout</a>";
					}
					else
					{
					?>
					
					<ul class="clearfix">
						<li>
							<a href="" title="Đăng nhập">Đăng nhập</a>
							<div class="user-form">
								<div class="fshop-profile-box">
									<div class="fshop-profile-line-top"></div>
									<form class="Login form" action="checklogin.php" method="POST" id="Login">
										<p>
											<input type="text" name="username" placeholder="Tên đăng nhập" class="text validate[required]">
										</p>
										<p>
											<input type="password" placeholder="Mật khẩu"  name="password" class="text validate[required,minSize[6]]">
										</p>
										<p><span class="resetpass">Quên mật khẩu?</span></p>
										<p><span id="msglogin"></span></p>
										<p class="text-right">
											<button id="btnLogin" name="btnLogin" type="submit" class="submit">Đăng nhập</button>
										</p>
									</form>
								</div>
							</div>
						</li>
						<li>
							<a href="javascript:;" title="Đăng ký">Đăng ký</a>
							<div class="user-form">
								<div class="fshop-profile-box">
									<div class="fshop-profile-line-top"></div>
									<form id="Register" class="Register form" action="register-customer.php" method="POST">
										<p>
											<input id="UserName" type="text" placeholder="Họ và tên" name="fullname" class="text validate[required,minSize[5]]">
										</p>
										<p>
											<input id="email" name="username" type="text" placeholder="e-Mail" class="text validate[required,custom[email]]">
										</p>
										<p>
											<input type="password" id="password" name="password" placeholder="Mật khẩu" value="" class="text validate[required,minSize[6]]">
										</p>
										<p>
											<input id="txtPasswordConfirm" type="password" placeholder="Nhắc lại mật khẩu" class="text validate[required,minSize[6]]" />
										</p>
										<p>
											<input id="txtPasswordConfirm" name = "email" type="password" placeholder="Email" class="text validate[required,minSize[6]]" />
										</p>
										<p><span id="msg"></span></p>
										<p class="text-right">
											<button id="btnRegister" name="btnRegister" type="submit" class="submit">Đăng ký</button>
										</p>
									</form>
								</div>
							</div>
						</li>
					</ul>

					
						
					<?php	
					}
					?>
					
					
					
					
					
					
					
					
					
				</div>
				<li class="profile menu">
					<a href="javascript:;">
						<span class="icon"></span>
						<h2 style="font-size: 12px; margin-top: 2px">Thành viên</h2>
					</a>
					<div class="submenu">
						<div class="col">
							<h3>Đăng ký</h3>
							<form id="Register" class="Register form" action="#" method="POST">
								<p>
									<input id="UserName" type="text" placeholder="Họ và tên" name="UserName" class="text validate[required,minSize[5]]">
								</p>
								<p>
									<input id="email" name="email" type="text" placeholder="e-Mail" class="text validate[required,custom[email]]">
								</p>
								<p>
									<input type="password" id="txtPassword" name="password" placeholder="Mật khẩu" value="" class="text validate[required,minSize[6]]">
								</p>
								<p>
									<input id="txtPasswordConfirm" type="password" placeholder="Nhắc lại mật khẩu" class="text validate[required,minSize[6]]" />
								</p>
								<p><span id="msg"></span></p>
								<p class="text-right">
									<button id="btnRegister" name="btnRegister" type="submit" class="submit">Đăng ký</button>
								</p>
							</form>
						</div>
						<div class="col">
							<h3>Đăng Nhập</h3>
							<form class="Login form" action="#" method="POST" id="Login">
								<p>
									<input type="text" name="email" placeholder="e-Mail hoặc điện thoại" id="email1" class="text validate[required]">
								</p>
								<p>
									<input type="password" placeholder="Mật khẩu" id="password" name="password" class="text validate[required,minSize[6]]">
								</p>
								<p><span class="resetpass">Quên mật khẩu?</span></p>
								<p><span id="msglogin"></span></p>
								<p class="text-right">
									<button id="btnLogin" name="btnLogin" type="submit" class="submit">Đăng nhập</button>
								</p>
							</form>
						</div>
					</div>
				</li>
				<nav class="fshop-nav-menu">
					<div class="fshop-nav">
						<ul>
							<?php
								//Select tat ca danh muc cha
								$sql = mysql_query("select * from category",$connect);
								while ($row = mysql_fetch_array($sql))
								{
									?>
							<li>
								<a href="" class="">
									<i class="icon-apple"></i> 
									<h2><?php echo $row["Name"];?></h2>
								</a>
								<div class="fshop-nav-submenu clearfix">
									<div class="fshop-nsm-apple">
										<div class="fshop-nsm-col fshop-nsm-col50">
											<ul class="fshop-nsm-list fshop-nsm-double">
												<?php
													//select tat ca danh muc con
													$sql_danhmuccon = mysql_query("select * from category_detail where Category_id= {$row["Id"]}",$connect);
													while ($sub_row= mysql_fetch_array($sql_danhmuccon))
													{
														?>
												<li><a href="" onclick="" title="iPhone">	<?php echo  $sub_row["Name"] ; ?>	</a></li>
												<?php
													}
													?>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<?php
								}
								
								?>
						</ul>
					</div>
				</nav>
		</div>
		</header>          
		<div id="listproductpage" class="container">
			<ul class="breadcrumbs clearfix">
				<li><a href="javascript:if(confirm('http://fptshop.com.vn/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://fptshop.com.vn/'" tppabs="http://fptshop.com.vn/">Trang chủ</a></li>
				<li class="current"><a href="javascript:;">Tìm kiếm</a> (65 sản phẩm)</li>
				<li class="title-cate">
					<h1><a href="asus.htm" tppabs="http://fptshop.com.vn/may-tinh-xach-tay/asus" title="Laptop - M&#225;y t&#237;nh x&#225;ch tay Asus">Laptop - M&#225;y t&#237;nh x&#225;ch tay Asus</a></h1>
				</li>
			</ul>
			<h2 class="des-cate">Sản phẩm Laptop Asus ch&#237;nh h&#227;ng được cung cấp tại FPTShop với mức gi&#225; ưu đ&#227;i c&#249;ng những phần qu&#224; lớn d&#224;nh cho người sử dụng.</h2>
			<div class="newtopslide">
				<script src="news-top6Js.js" tppabs="http://fptshop.com.vn/Content/Publishing/js/news-top6Js.js"></script>
			</div>
			<div class="wrapper clearfix">
				<div class="sidebar"></div>
				<div class="main">
					<div class="filterbox clearfix" data-nameascii="may-tinh-xach-tay" data-id="3">
						<div class="lbfiter"><a href="javascript:;">Lọc nâng cao<i class="filter-arrow"></i></a></div>
						<div class="filteritem">
							<div class="filtername">
								<a title="H&#227;ng sản xuất" href="javascript:;">H&#227;ng sản xuất</a>
							</div>
							<ul class="filterlistwrapper" data-query="hang-san-xuat" data-id="299">
								<li><a href="javascript:;" class="filter-link active" data-value="">Tất cả</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="acer" data-id="300">Acer</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="asus" data-id="301">Asus</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="dell" data-id="303">Dell</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="hp" data-id="305">HP</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="lenovo" data-id="306">Lenovo</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="toshiba" data-id="309">Toshiba</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="apple-macbook" data-id="344">Apple (Macbook)</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="sony" data-id="371">Sony</a></li>
							</ul>
						</div>
						<div class="filteritem">
							<div class="filtername">
								<a title="Mức gi&#225;" href="javascript:;">Mức gi&#225;</a>
							</div>
							<ul class="filterlistwrapper" data-query="muc-gia" data-id="326">
								<li><a href="javascript:;" class="filter-link active" data-value="">Tất cả</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="duoi-10-trieu" data-id="329">Dưới 10 triệu</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="tu-10-15-trieu" data-id="331">Từ 10 - 15 triệu</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="tu-15-20-trieu" data-id="333">Từ 15 - 20 triệu</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="tu-20-25-trieu" data-id="334">Từ 20 - 25 triệu</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="tu-25-30-trieu" data-id="335">Từ 25 - 30 triệu</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="tren-30-trieu" data-id="336">Tr&#234;n 30 triệu</a></li>
							</ul>
						</div>
						<div class="filteritem">
							<div class="filtername">
								<a title="Bộ xử l&#253;" href="javascript:;">Bộ xử l&#253;</a>
							</div>
							<ul class="filterlistwrapper" data-query="bo-xu-ly" data-id="302">
								<li><a href="javascript:;" class="filter-link active" data-value="">Tất cả</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="intel-core-i7" data-id="310">Intel Core i7</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="intel-core-i5" data-id="311">Intel Core i5</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="intel-core-i3" data-id="313">Intel Core i3</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="amd" data-id="315">AMD</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="intel-pentium" data-id="318">Intel Pentium</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="intel-celeron" data-id="320">Intel Celeron</a></li>
							</ul>
						</div>
						<div class="filteritem">
							<div class="filtername">
								<a title="Mục đ&#237;ch sử dụng" href="javascript:;">Mục đ&#237;ch sử dụng</a>
							</div>
							<ul class="filterlistwrapper" data-query="muc-dich-su-dung" data-id="312">
								<li><a href="javascript:;" class="filter-link active" data-value="">Tất cả</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="hoc-tap-van-phong" data-id="314">Học tập - Văn ph&#242;ng</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="thoi-trang-mong-nhe" data-id="316">Thời trang - mỏng nhẹ</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="game-do-hoa" data-id="317">Game - Đồ hoạ</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="giai-tri" data-id="319">Giải tr&#237; </a></li>
								<li><a href="javascript:;" class="filter-link" data-value="doanh-nhan" data-id="321">Doanh nh&#226;n</a></li>
							</ul>
						</div>
						<div class="filteritem">
							<div class="filtername">
								<a title="K&#237;ch thước m&#224;n h&#236;nh" href="javascript:;">K&#237;ch thước m&#224;n h&#236;nh</a>
							</div>
							<ul class="filterlistwrapper" data-query="kich-thuoc-man-hinh" data-id="322">
								<li><a href="javascript:;" class="filter-link active" data-value="">Tất cả</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="khoang-11-inches" data-id="323">Khoảng 11 Inches</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="khoang-13-inches" data-id="324">Khoảng 13 Inches</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="khoang-14-inches" data-id="325">Khoảng 14 Inches</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="khoang-15-inches" data-id="327">Khoảng 15 Inches</a></li>
								<li><a href="javascript:;" class="filter-link" data-value="tren-15-inches" data-id="361">Tr&#234;n 15 Inches</a></li>
							</ul>
						</div>
						<ul class="filterorder">
							<li>
								<a href="?column=Price&orderby=DESC" data-sort="gia-cao-den-thap">Giá cao đến thấp</a>
							</li>
							<li>
								<a href="?column=Price&orderby=ASC" data-sort="gia-thap-den-cao">Giá thấp đến cao</a>
							</li>
							<li>
								<a href="javascript:;" data-sort="ban-chay-nhat">Bán chạy nhất</a>
							</li>
							<li>
								<a href="javascript:;" data-sort="xem-nhieu-nhat">Xem  nhiều nhất</a>
							</li>
						</ul>
						<div class="row-filter">
							<div class="item-row-filter">
								<div class="item-row-filter-name">
									<a title="RAM" href="javascript:;">RAM</a>
								</div>
								<ul class="item-filter-list" data-query="ram">
									<li><a href="javascript:;" class="item-filter-link active" data-value=""><i class="cb_icon"></i>Tất cả</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="duoi-1-gb"><i class="cb_icon"></i>Dưới 1 GB</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="1-gb"><i class="cb_icon"></i>1 GB</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="2-gb"><i class="cb_icon"></i>2 GB</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="3-gb"><i class="cb_icon"></i>3 GB</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="4-gb"><i class="cb_icon"></i>4 GB</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="6-gb"><i class="cb_icon"></i>6 GB</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="8-gb"><i class="cb_icon"></i>8 GB</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="16-gb"><i class="cb_icon"></i>16 GB</a></li>
								</ul>
							</div>
							<div class="item-row-filter">
								<div class="item-row-filter-name">
									<a title="Loại Laptop" href="javascript:;">Loại Laptop</a>
								</div>
								<ul class="item-filter-list" data-query="loai-laptop">
									<li><a href="javascript:;" class="item-filter-link active" data-value=""><i class="cb_icon"></i>Tất cả</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="notebook"><i class="cb_icon"></i>Notebook</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="netbook"><i class="cb_icon"></i>Netbook</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="ultrabook"><i class="cb_icon"></i>Ultrabook</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="2-in-1"><i class="cb_icon"></i>2 in 1</a></li>
								</ul>
							</div>
							<div class="item-row-filter">
								<div class="item-row-filter-name">
									<a title="Kiểu d&#225;ng" href="javascript:;">Kiểu d&#225;ng</a>
								</div>
								<ul class="item-filter-list" data-query="kieu-dang">
									<li><a href="javascript:;" class="item-filter-link active" data-value=""><i class="cb_icon"></i>Tất cả</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="truyen-thong"><i class="cb_icon"></i>Truyền thống</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="man-hinh-roi"><i class="cb_icon"></i>M&#224;n h&#236;nh rời</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="xoay-360&#176;"><i class="cb_icon"></i>Xoay 360&#176;</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="man-hinh-truot"><i class="cb_icon"></i>M&#224;n h&#236;nh trượt</a></li>
								</ul>
							</div>
							<div class="item-row-filter">
								<div class="item-row-filter-name">
									<a title="M&#224;n h&#236;nh cảm ứng" href="javascript:;">M&#224;n h&#236;nh cảm ứng</a>
								</div>
								<ul class="item-filter-list" data-query="man-hinh-cam-ung">
									<li><a href="javascript:;" class="item-filter-link active" data-value=""><i class="cb_icon"></i>Tất cả</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="co"><i class="cb_icon"></i>C&#243;</a></li>
									<li><a href="javascript:;" class="item-filter-link" data-value="khong"><i class="cb_icon"></i>Kh&#244;ng</a></li>
								</ul>
							</div>
							<div class="bt-row-filter">
								<a href="javascript:;" class="btn-default btn-filtering">Lọc sản phẩm</a>
								<a href="javascript:;" class="btn-default btn-cancel-select btn-pink">Bỏ chọn</a>
								<a href="javascript:;" class="btn-default btn-hide-filter btn-gray">Thu gọn</a>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="productbox">
							<?php
								//So san pham / trang
								$size = 6;
								if(isset($_GET["tukhoa"]))
								{
								//Kiem xem co tat ca bao nhieu san pham
								$result= mysql_query("SELECT COUNT(*) FROM ".
													"(SELECT * FROM `laptop` WHERE Name like \"%{$_GET["tukhoa"]}%\" ". 
													" UNION ".
													" SELECT * FROM `laptop` WHERE Feature like \"%{$_GET["tukhoa"]}%\" ". 
													" UNION ".
													" SELECT * FROM `laptop` WHERE Warrantee like \"%{$_GET["tukhoa"]}%\") ".
													"AS A",$connect);
								}
								else{
										//Kiem xem co tat ca bao nhieu san pham
									$result= mysql_query("select count(*) from laptop",$connect);
								
								}
								$row= mysql_fetch_array($result);
								$tongsosanpham = $row[0];
								//Tinh xem co bao nhieu trang
								$tongsotrang = ceil($tongsosanpham/$size);
								?>
							<!--List Product Here-->
							<?php include("products-list.php"); ?>
							<?php						
								for($i = 1;$i<= $tongsotrang; $i++)
								{
									echo "<a href=\"?trang=$i\">[$i]</a>";
								}
								
								?>
							<!--
								<div class="form-view-more">
								    <a href="javascript:;" class="view-more" data-pagecurrent="1" data-nextpage="21" data-type="Hot" data-list="list-product-hot">Xem tiếp <b>44</b> sản phẩm</a>
								</div>
								-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Container -->
		<!-- Social button -->
		<!-- End Social buttons -->
		<!-- Footer -->
		<footer class="footer">
			<div class="newsinfo">
				<div class="clearfix wrapper">
					<div class="ft_lmenu_box1">
						<div class="ft_lmenu_item">
							<h3>Thông Tin FPT Shop</h3>
							<ul>
								<li><a href="javascript:if(confirm('http://fptshop.com.vn/cua-hang  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://fptshop.com.vn/cua-hang'" tppabs="http://fptshop.com.vn/cua-hang" target="_blank" rel="nofollow">Hệ thống cửa h&#224;ng</a></li>
								<li><a href="javascript:if(confirm('http://fptshop.com.vn/lien-he  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://fptshop.com.vn/lien-he'" tppabs="http://fptshop.com.vn/lien-he" target="_blank" rel="nofollow">Li&#234;n hệ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="newsletter">
				<div class="wrapper clearfix">
					<div class="left form">
						<form id="regiterPromotionEmail">
							<p>
								<span>Đăng ký để nhận tin khuyến mãi:</span>
								<input type="text" class="text validate[required,minSize[6]]" name="name" placeholder="Họ và tên">
								<input type="text" class="text validate[required,custom[email],minSize[6]]" name="email" placeholder="Email">
								<input type="submit" class="submit" value="Xác nhận">
							</p>
						</form>
					</div>
					<div class="right support">
						<div class="support-info" style="display:inline-block; margin:0 5px; text-align: left;">
							<p>
								Tư vấn miễn phí:
							</p>
							<p class="phone">19006606</p>
						</div>
						<div class="support-info" style="display:inline-block; margin:0 5px; text-align: left;">
							<p>
								Khiếu nại, bảo hành:
							</p>
							<p class="phone">19006616</p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix wrapper">
				<address class="text-right adress">
					<span>Công Ty Cổ Phần Bán Lẻ Kỹ Thuật Số FPT</span> - 261 Khánh Hội, P5, Q4, TP. Hồ Chí Minh.<br>
					GPĐKKD số 0311609355 do Sở KHĐT TP.HCM cấp ngày 08/03/2012.<br>
					Điện thoại: 08.73023456. Fax: 08.39435773. Địa chỉ email: <a href="mailto:fptshop@fpt.com.vn">fptshop@fpt.com.vn</a><br>
					Giấy phép thiết lập trang TTĐT số 19/GP-ICP, cấp ngày 29/3/2013<br>
				</address>
			</div>
		</footer>
		<!-- End Footer -->
		<div id="demoTreasure"></div>
	</div>
	</div>
	<div id="treasure_home"></div>
	<div class="popup-order">
	</div>
	<div class="overlay">
	</div>
	<script src="scripts-v=QTDiR1Jrr-eJbmKAfjvpCOv9DrnA-TNcZFfp5MMrTn01" tppabs="http://fptshop.com.vn/bundles/scripts?v=QTDiR1Jrr-eJbmKAfjvpCOv9DrnA-TNcZFfp5MMrTn01"></script>
	<script src="masonry.pkgd.min.js-v=3110" tppabs="http://fptshop.com.vn/Content/Publishing/js/masonry.pkgd.min.js?v=3110"></script>
	<script src="fptshop.listproductpage2.js-v=3110" tppabs="http://fptshop.com.vn/Content/Publishing/js/fptshop.listproductpage2.js?v=3110"></script>
	<script type="text/javascript">
		var product = {
		    category: ['M&#225;y t&#237;nh x&#225;ch tay', 'Laptop - M&#225;y t&#237;nh x&#225;ch tay Asus']
		};
		$(function () {
		    fptshop.listproductpage2.initSearch();
		});
	</script>
	<script src="fptshop.main.js-v=0701" tppabs="http://fptshop.com.vn/Content/Publishing/js/fptshop.main.js?v=0701"></script>
	<script src="history.js-v=0302" tppabs="http://fptshop.com.vn/Content/Publishing/js/history.js?v=0302"></script> 
	<script type="text/javascript" class="microad_blade_track">
		var microad_blade_gl = microad_blade_gl || { 'params': new Array(), 'complete_map': new Object() };
		(function () {
		    var param = { 'co_account_id': '5685', 'group_id': '', 'country_id': '5', 'ver': '2.1.0' };
		    microad_blade_gl.params.push(param);
		
		    var src = (location.protocol == 'https:')
		        ? 'https://d-cache.microadinc.com/js/blade_track_gl.js' : 'blade_track_gl.js'/*tpa=http://d-cache.microadinc.com/js/blade_track_gl.js*/;
		
		    var bs = document.createElement('script');
		    bs.type = 'text/javascript'; bs.async = true;
		    bs.charset = 'utf-8'; bs.src = src;
		
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(bs, s);
		})();
	</script>
	<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 967382527;
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
		/* ]]> */
	</script>
	<script type="text/javascript" src="conversion.js" tppabs="http://www.googleadservices.com/pagead/conversion.js"></script>
	<noscript>
		<div style="display: inline;">
			<img height="1" width="1" style="border-style: none;" alt="" src="-script=0&random=2531300270.gif" tppabs="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/967382527/?value=0&guid=ON&script=0" />
		</div>
	</noscript>
	<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 971345648;
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
		/* ]]> */
	</script>
	<script type="text/javascript" src="conversion.js" tppabs="http://www.googleadservices.com/pagead/conversion.js"></script>
	<noscript>
		<div style="display: inline;">
			<img height="1" width="1" style="border-style: none;" alt="" src="-script=0&random=734543757.gif" tppabs="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/971345648/?value=0&guid=ON&script=0" />
		</div>
	</noscript>
	<script>
		(function () {
		    var _fbq = window._fbq || (window._fbq = []);
		    if (!_fbq.loaded) {
		        var fbds = document.createElement('script');
		        fbds.async = true;
		        fbds.src = 'fbds.js'/*tpa=http://connect.facebook.net/en_US/fbds.js*/;
		        var s = document.getElementsByTagName('script')[0];
		        s.parentNode.insertBefore(fbds, s);
		        _fbq.loaded = true;
		    }
		    _fbq.push(['addPixelId', '1416134555340291']);
		})();
		window._fbq = window._fbq || [];
		window._fbq.push(['track', 'PixelInitialized', {}]);
	</script>  
	<script type="text/javascript">
		(function () {
		    var s = document.createElement('script');
		    var x = document.getElementsByTagName('script')[0];
		    s.type = 'text/javascript';
		    s.async = true;
		    s.src = ('https:' == document.location.protocol ? 'https://' : 'http://')
		        + 'ap-sonar.sociomantic.com/js/2010-07-01/adpan/fptshop-vn';
		    x.parentNode.insertBefore(s, x);
		})();
	</script>
	<noscript>
		<img height="1" width="1" alt="" style="display: none" src="tr-id=1416134555340291&ev=NoScript" tppabs="https://www.facebook.com/tr?id=1416134555340291&ev=NoScript" />
	</noscript>
	<style>
		.regionName {
		cursor: pointer;
		}
	</style>
	<script>
		(function () {
		    var _fbq = window._fbq || (window._fbq = []);
		    if (!_fbq.loaded) {
		        var fbds = document.createElement('script');
		        fbds.async = true;
		        fbds.src = 'fbds.js'/*tpa=http://connect.facebook.net/en_US/fbds.js*/;
		        var s = document.getElementsByTagName('script')[0];
		        s.parentNode.insertBefore(fbds, s);
		        _fbq.loaded = true;
		    }
		    _fbq.push(['addPixelId', '498842276926206']);
		})();
		window._fbq = window._fbq || [];
		window._fbq.push(['track', 'PixelInitialized', {}]);
	</script>
	<noscript>
		<img height="1" width="1" alt="" style="display: none" src="tr-id=498842276926206&ev=NoScript" tppabs="https://www.facebook.com/tr?id=498842276926206&ev=NoScript" />
	</noscript>
	<!-- Google Code for OrderConversion Conversion Page -->
	<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 992405008;
		var google_conversion_language = "en";
		var google_conversion_format = "2";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "YQ3CCMyeiVkQkMyb2QM";
		var google_conversion_value = 1000000.00;
		var google_conversion_currency = "VND";
		var google_remarketing_only = false;
		/* ]]> */
	</script>
	<script type="text/javascript" src="conversion.js" tppabs="http://www.googleadservices.com/pagead/conversion.js"></script>
	<noscript>
		<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="fi000001.00&currency_code=vnd&label=yq3ccmyeivkqkmyb2qm&guid=on&script=0&ctc_id=caivagaaab0caaaa&ct_cookie_present=false&random=621063744&cdct=2&convclickts=0&ocp_id=_vt7vip9gnkt9gxct4licq&random=2995348604.gif" tppabs="http://www.googleadservices.com/pagead/conversion/992405008/?value=1000000.00&currency_code=VND&label=YQ3CCMyeiVkQkMyb2QM&guid=ON&script=0"/>
		</div>
	</noscript>
	<script type="text/javascript" src="analytics-1.js" tppabs="http://analytics.cafebongda.vn/Scripts/analytics.js"></script>
</body>


</html>
