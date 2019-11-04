<!DOCTYPE HTML>
<html>
<head>
	<?php 
		include('modules/link.php'); //phần link
	?>
</head>
<body>
		
	<div class="colorlib-loader"></div>
	<div id="page">
		<?php 
			include('modules/nav.php'); //phần nav
		?>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Trang Chủ</a></span> / <span>Khối 12</span></p>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg product-detail-wrap">

					<!-- Images các lớp -->
					<div class="col-sm-8">
						<div class="owl-carousel">
							<div class="item">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/12A.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
								</div>
							</div>
							<div class="item">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/12B.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
								</div>
							</div>
							<div class="item">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/12C.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
								</div>
							</div>
							<div class="item">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/12D.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Danh sách lớp -->
					<div class="col-sm-4">
						<div class="product-desc">
							<h3>Khối 12</h3>
							<div class="size-wrap">
								<div class="block-26 mb-2">
									<h4>Lớp</h4>
				               <ul>
				                  <li><a href="#">A</a></li>
				                  <li><a href="#">B</a></li>
				                  <li><a href="#">C</a></li>
				                  <li><a href="#">D</a></li>
				               </ul>
				            </div>    	
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php 
			include('modules/footer.php');  //footer.php
		?>
	</div>
	
	<?php 
		include('modules/script.php');   //phần script
	?>
</body>
</html>

