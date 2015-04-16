<?php 
	include("ketnoi.php");
	$trang =1;
	if(isset($_GET["trang"])){
		$trang = $_GET["trang"];
	}
	else{
		$trang =1;
	}
	$start = ($trang -1) * $size + 1;
	//Neu khong co dong nay se bi mat san pham cuoi cung trong lst sp
	if($start>1){
		$start -= 1;
	}
	$orderby="";
	//Sap xep theo gia
	if(isset($_GET["column"]))
	{
		$orderby = " order by ".$_GET["column"]." ".$_GET["orderby"];
	}
	
	//Truong hop co tukhoa tim kiem
	if(isset($_GET["tukhoa"]))
	{
		$query=mysql_query("SELECT * FROM `laptop` WHERE Name like \"%{$_GET["tukhoa"]}%\" ". 
										" UNION ".
										" SELECT * FROM `laptop` WHERE Feature like \"%{$_GET["tukhoa"]}%\" ". 
										" UNION ".
										" SELECT * FROM `laptop` WHERE Warrantee like \"%{$_GET["tukhoa"]}%\" ".
										" $orderby ".
										" limit $start, $size ",$connect);
	}
	else{	
	$query=mysql_query( "select * from laptop $orderby limit $start, $size ",$connect); 
	}
	while($row=mysql_fetch_array($query)){ 
?>

						<div class="productlist">
							<ul>
								<li class="product">
									<a href="products_detail.php?id= <?php echo $row["Id"]?>" > 
									<span class="badge">
									</span>
										<section class="wrap">
											<figure class="image"> <img src="<?php echo $row["Img"] ?>"  alt="Asus K555LD-XX362D/Core i7 4510U" /> </figure>
											<div class="info">
												<div class="topinfo">
													<div class="namewrap">
														<h3 class="name"><?php echo $row["Name"] ?></h3> </div>
													<div class="price">
														<?php echo $row[ "Price"] ?><span class="symbol">VNĐ</span> </div>
												</div>
												<div class="description">
													<div class="promotion-des">
														<p>Đặt ngay tặng kèm</p>
													</div>
													<?php echo $row[ "Promotion"] ?>
													<div class="promotion-des">
														<p>Chi Tiết Sản Phẩm</p>
													</div>
													<?php echo $row[ "Feature"] ?>
												</div>
												<div class="bot"> <a href="#" data-id="38789" data-type="3" data-ascii="asus-k555ld-xx362dcore-i7-4510u" class="comparenow btn-hover">So sánh</a> </div>
											</div>
										</section>
									</a>
								</li>
							</ul>
						</div>
<?php } ?>