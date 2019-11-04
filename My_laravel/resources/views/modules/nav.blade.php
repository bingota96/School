<nav class="colorlib-nav" role="navigation">
	<div class="top-menu">
		<div class="container">
			<div class="row">
				<div class="col-sm-7 col-md-9">
					<div id="colorlib-logo">
						<a href="index.php">BachKhoaAp</a>
					</div>
				</div>
				<div class="col-sm-5 col-md-3">
					<form action="#" class="search-wrap">
						<div class="form-group">
							<input type="search" class="form-control search" placeholder="Search">
							<button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
						</div>
					</form>
				</div>
			</div>
			
			<!-- Menu chọn -->
			<div class="row">
				<div class="col-sm-12 text-left menu-1">
					<ul>
						<!-- Trang chủ -->
						<li class="active"><a href="index.php">Trang Chủ</a></li>
						<!-- Khối Lớp -->
						<li class="has-dropdown">
							<a href="khoiLop.php">Khối</a>
							<ul class="dropdown">
								<li><a href="khoi10.php">Khối 10</a>
									</li>
								<li><a href="khoi11.php">Khối 11</a></li>
								<li><a href="khoi12.php">Khối 12</a></li>
							</ul>
						</li>
						<li><a href="#">DS Giáo Viên</a></li>
						<li><a href="{{route('checkpoint')}}">Xem Điểm</a></li>
						<li><a href="{{route('point')}}">Liên Hệ</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>