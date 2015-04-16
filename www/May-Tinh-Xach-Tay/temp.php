<!DOCTYPE html>
<html lang="en">
	<head>
		<style>
			@media screen and (min-width:600px) {
				#menu {
				float: right;
				width: 25%;
			  }
			  section {
				margin-left: 25%;
			  }
			}
			@media screen and (max-width:599px) {
			#menu p {
				margin-left: 0px;
				width: 25%;
			  }
			  
			#productlst{
				  margin-left: 0px;
				width: 25%;
			  }
			  
		
			}
		
		
			#header {
			padding: 10px;
			background-image: url("http://www.caseih.com/en_us/PublishingImages/Background/2012_Spring/caseih_background_spring_header.jpg");
			width:  880px;
			}
			
			#header a{
				position: relative;
				top:-40px;
				left: 200px;
				font-size: 20px;
				
			}
			#header input{
				position: relative;
				top:-40px;
				left: 300px;
				
			}
			.container{
			position: relative;
			width: 900px;
			height: 100%;
			}
			#menu{
			float: left; 
			width:  20%; 
			height: 700px;
			padding-left: 10px;
			padding-top: 20px;
			background-color: #CC33FF;
			}
			#menu p{
			font-size: 15px;
				color: white;
			}
			
			.menu_title{
				font-size: 30px;
				color: white;
			}
			#productlst{
			padding-top: 20px;
			padding-left: 20px;
			margin-left: 21%;
			width:  60%; 
			height: 700px;
			background-color: #CC66FF;
			}
			#paging{
				width:  200px; 
				height: 20px;
				float: right;
			}
			.pre_next{
				display: inline-block;
				background-color: #B00000 ;
				width:  30px; 
				height: 20px;
				
			}
			.num_page{
				display: inline-block;
				background-color: #B00000 ;
				width:  30px; 
				height: 20px;
			}
			
			dt{
				text-align: center;
				width: 100px;
				padding: 10px;
				display: inline-block;
				vertical-align: top;
				border-style: solid;
				border-width: 1px;
				
			}
			dt a img
			{
				width: 100px;
				height:150px
			}
			#adv{
			margin-left: 90%; 
			padding: 10px;
			float: left; 
			width:  30px;
			height: 600px;
			background-color: #CC99FF;
			}
			#footer{
			float: left; 
			width:  900px; 
			height: 80px;
			background-color: #CCCCFF;
			text-align: center;
			}
		</style>
		<title>51101395_LAB6</title>
		<div id="header" class="cf">
			<h1>Site Title</h1>
			<a href="#">Categories|</a><a href="#">Contact us|</a><a href="#">Follow us</a>
			<input type = "text" placeholder = "Search...">
		</div>
	</head>
	<body>
		<div class="container">
			<div id = "menu">
				<div class="menu_title">
					Categories
				</div>
				<p>Item 1...</p>
				<p>Item 2...</p>
				<p>Item 3...</p>
				<p>Item 4...</p>
				<p>Item 5...</p>
				<div class="menu_title">
					Categories
				</div>
				<p>Item 1...</p>
				<p>Item 2...</p>
				<p>Item 3...</p>
				<p>Item 4...</p>
				<p>Item 5...</p>
			</div>
			<div id = "productlst">
				<dl class="products">
					TOP PRODUCT<BR>
						<dt>
							<a href="#">
								<img src="http://static.xdeal.vn/ListOfDealImg/7163/7163-12377162854210201412762813997163-12377.jpg"  alt ="shirt-orange.png">
								<p>Price: $10</p>
							</a>
							<button type="button">Buy Now!</button>
						</dt>
						<dt>
							<a href="#">
								<img src="http://static.xdeal.vn/ListOfDealImg/7163/7163-12377162854210201412762813997163-12377.jpg" alt ="shirt-orange.png">
								<p>Price: $10</p>
							</a>
							<button type="button">Buy Now!</button>
						</dt>
						
				</dl>
				<div id ="paging">
				<!--	<p>pre</p><p>1</p><p>2</p><p>3</p><p>next</p> -->
					<div class = "pre_next">
					prev
					</div>
					<div class = "num_page">
					1
					</div>
					<div class = "num_page">
					2
					</div>
					<div class = "num_page">
					3
					</div>
					<div class = "pre_next">
					next
					</div>
				</div>
			</div>
			<div id = "adv">
				<p>adv</p>
			</div>
			<div id = "footer">
				<p>Footer Infomations....</p>
				<a href="#">Link 1</a>|
				<a href="#">Link 2</a>|
				<a href="#">Link 3</a>
			</div>
		</div>
	</body>
</html>