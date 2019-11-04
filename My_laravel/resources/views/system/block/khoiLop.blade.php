<!DOCTYPE HTML>
<html>
<head>
	<?php 
		include('modules/link.php'); //Phần link
	?>
</head>
<body>
	<div class="colorlib-loader"></div>
	<div id="page">
		<?php 
			include('modules/nav.php'); // phần Nav
		?>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.php">Trang Chủ</a></span> / <span>Khối</span></p>
					</div>
				</div>
			</div>
		</div>

		<div class="breadcrumbs-two">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs-img" style="background-image: url(images/imagesKhoi.jpg);"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-featured">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 text-center">
						<div class="featured">
							<div class="featured-img featured-img-2" style="background-image: url(images/logo10.png);">
								<h2>Khối 10</h2>
								<p><a href="khoi10.php" class="btn btn-primary btn-lg">Truy Cập</a></p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 text-center">
						<div class="featured">
							<div class="featured-img featured-img-2" style="background-image: url(images/logo11.png);">
								<h2>Khối 11</h2>
								<p><a href="khoi11.php" class="btn btn-primary btn-lg">Truy Cập</a></p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 text-center">
						<div class="featured">
							<div class="featured-img featured-img-2" style="background-image: url(images/logo12.png);">
								<h2>Khối 12</h2>
								<p><a href="khoi12.php" class="btn btn-primary btn-lg">Truy Cập</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php 
			include('modules/lienHe.php'); //phần liên hệ
			include('modules/footer.php'); // phần footer
		?>
	</div>

		<?php 
			include('modules/script.php'); // phần script
		?>
</body>
</html>

