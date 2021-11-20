<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?= $title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/assets/img/favicon-sfj.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['/assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/atlantis.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="/assets/css/demo.css">

	<!-- custom -->
	<link rel="stylesheet" href="/assets/css/sumber-jaya-styles.css">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="/" class="logo">
					<img src="/assets/img/title-logo.svg" alt="navbar brand" class="navbar-brand" style="height: 30px;">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div> <!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>

					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li> <!-- end search hidden -->

						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a> <!-- end navlink -->

							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div> <!-- quick actions header -->
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="/admin/barang">
												<div class="quick-actions-item">
													<div class="avatar-item bg-danger rounded-circle">
														<i class="fas fa-box-open"></i>
													</div>
													<span class="text">Data Barang</span>
												</div>
											</a> <!-- end data barang -->

											<a class="col-6 col-md-4 p-0" href="/admin/transaksi">
												<div class="quick-actions-item">
													<div class="avatar-item bg-warning rounded-circle">
														<i class="fas fa-shopping-cart"></i>
													</div>
													<span class="text">Data Transaksi</span>
												</div>
											</a> <!-- end data transaksi -->

											<a class="col-6 col-md-4 p-0" href="/">
												<div class="quick-actions-item">
													<div class="avatar-item bg-info rounded-circle">
														<i class="fas fa-file-signature"></i>
													</div>
													<span class="text">Laporan Bulanan</span>
												</div>
											</a> <!-- end transaksi bulanan -->
										</div> <!-- end row -->
									</div> <!-- end quick items -->
								</div> <!-- quick actions scroll -->
							</div> <!-- end dropdown menu quick actions -->
						</li> <!-- end quick actions -->

						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="/assets/img/ava-musa.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="/assets/img/ava-musa.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Musa</h4>
												<p class="text-muted">musaalfianmaulana@students.undip.ac.id</p>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="/logout">Logout</a>
									</li>
								</div>
							</ul>
						</li> <!-- end profil -->
					</ul> <!-- end navbar top navbar -->
				</div> <!-- end container fluid -->
			</nav> <!-- End Navbar -->
		</div> <!-- end main header -->

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="/assets/img/ava-musa.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="/" aria-expanded="true">
								<span>
									Musa
									<span class="user-level">Administrator</span>
								</span>
							</a>
							<div class="clearfix"></div>
						</div> <!-- end info -->
					</div> <!-- end user -->

					<ul class="nav nav-primary">
						<li class="nav-item <?php if($title == 'Admin Dashboard | Sumber Jaya Furniture') : echo 'active'; endif;?>">
							<a href="/">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li> <!-- end nav item -->

						<li class="nav-item <?php if($title == 'Data Barang | Sumber Jaya Furniture') : echo 'active'; endif;?>">
							<a href="/admin/barang">
								<i class="fas fa-box-open"></i>
								<p>Data Barang</p>
							</a>
						</li> <!-- end nav data barang -->

						<li class="nav-item <?php if($title == 'Data Transaksi | Sumber Jaya Furniture') : echo 'active'; endif;?>">
							<a href="/admin/transaksi">
								<i class="fas fa-shopping-cart"></i>
								<p>Data Transaksi</p>
							</a>
						</li> <!-- end nav data transaksi -->
					</ul> <!-- end nav primary -->
				</div> <!-- end sidebar content -->
			</div> <!-- end sidebar wripper -->
		</div> <!-- End Sidebar -->

		<!-- Formulir disini -->
		<div class="main-panel">
			<div class="container">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Formulir Tambah Barang</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="/">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="/admin/barang">Data Barang</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="/tambah/tambah">Formulir tambah barang</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Tambah Barang</div>
									<div class="card-category">Masukkan data barang dengan sebenar-benarnya</div>
								</div>
								<form action="/tambah/tambahBarang" method="POST" enctype="multipart/form-data">
									<?= csrf_field(); ?>
									<div class="card-body">
										<div class="form-group form-show-validation row">
											<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama <span class="required-label">*</span></label>
											<div class="col-lg-7 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="nama" name="nama" placeholder="" required autofocus>
												<!--  -->
											</div>
										</div> <!-- end nama -->

										<div class="form-group form-show-validation row">
											<label for="kategori" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Kategori <span class="required-label">*</span></label>
											<div class="col-lg-7 col-md-9 col-sm-8">
												<select id="kategori" required class="form-control" name="kategori" required>
													
													<option hidden> -- Pilih Kategori --</option>
													<?php foreach ($kategori as $data) : ?>
													<!-- Ambil dari database -->
													<option value="<?= $data['idkategori']; ?>"><?= $data['nama']; ?></option>
													<!-- <option value="112">Hospital Furniture</option>
													<option value="113">Office Furniture</option> -->
													<?php endforeach; ?>
												</select>
											</div>
										</div> <!-- end kategori -->

										<div class="form-group form-show-validation row">
											<label for="stok" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Stok <span class="required-label">*</span></label>
											<br>
											<div class="col-lg-7 col-md-9 col-sm-8">
												<input class="form-control" type="number" id="stok" min="1" step="1" name="stok">
											</div>
										</div> <!-- end stok -->

										<div class="form-group form-show-validation row">
											<label for="harga" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Harga (Rp) <span class="required-label">*</span></label>
											<br>
											<div class="col-lg-7 col-md-9 col-sm-8">
												<input class="form-control" type="number" id="harga" min="500" step="500" name="harga">
											</div>
										</div> <!-- end harga -->

										<div class="form-group form-show-validation row">
											<label for="berat" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Berat (Kg) <span class="required-label">*</span></label>
											<br>
											<div class="col-lg-7 col-md-9 col-sm-8">
												<input class="form-control" type="number" id="berat" min="1" step="1" name="berat">
											</div>
										</div> <!-- end berat -->

										<div class="form-group form-show-validation row">
											<label for="keterangan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Keterangan <span class="required-label">*</span></label>
											<br>
											<div class="col-lg-7 col-md-9 col-sm-8">
												<textarea class="form-control" name="keterangan" id="Keterangan" cols="30" rows="10">
												</textarea>
											</div>
										</div> <!-- end keterangan -->
										
										<div class="form-group form-show-validation row">
											<label for="tgl_insert" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tanggal Insert<span class="required-label">*</span></label>
											<br>
											<div class="col-lg-7 col-md-9 col-sm-8">
												<input type="date" class="form-control" name="tgl_insert" id="tgl_insert" value="<?php echo "date('m/d/y')";?> required">
											</div>
										</div>
										<!-- end tgl_insert -->

										<div class="form-group form-show-validation row">
											<label for="tgl_update" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tanggal Input<span class="required-label">*</span></label>
											<br>
											<div class="col-lg-7 col-md-9 col-sm-8">
												<input type="date" class="form-control" name="tgl_update" id="tgl_update" value="<?php echo date('m/d/y');?>">
												
											</div>
										</div>
										<!-- end tgl_update -->

										<div class="form-group form-show-validation row">
											<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Gambar <span class="required-label">*</span></label>
											<div class="col-lg-7 col-md-9 col-sm-8">
												<div class="input-file input-file-image">
													<img class="img-upload-preview" width="100" height="100" src="http://placehold.it/100x100" alt="preview">
													<input type="file" class="form-control form-control-file" id="image" name="image" accept="image/*" required>
													
													<label for="image" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload gambar</label>
												</div>
											</div>
										</div>
									</div>
									<div class="card-action">
										<div class="row">
											<div class="col-md-12 d-flex justify-content-end">
												<a href="/admin/barang" class="btn btn-danger" style="border-radius: 100px;">
													Batal
												</a>
												<input class="btn btn-primary ml-4" type="submit" value="Tambah" style="border-radius: 100px;">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<footer class="footer text-center">
				<p>Copyright &copy; 2021 | <span class="fw-bold">Sumber Jaya Furniture</span>. Jaya Jaya Jaya!</p>
			</footer> <!-- end footer -->
		</div>
		<!--   Core JS Files   -->
		<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
		<script src="/assets/js/core/popper.min.js"></script>
		<script src="/assets/js/core/bootstrap.min.js"></script>
		<!-- jQuery UI -->
		<script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
		<script src="/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
		<!-- Moment JS -->
		<script src="/assets/js/plugin/moment/moment.min.js"></script>
		<!-- Bootstrap Toggle -->
		<script src="/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
		<!-- jQuery Scrollbar -->
		<script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
		<!-- DateTimePicker -->
		<script src="/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
		<!-- Select2 -->
		<script src="/assets/js/plugin/select2/select2.full.min.js"></script>
		<!-- jQuery Validation -->
		<script src="/assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>
		<!-- Atlantis JS -->
		<script src="/assets/js/atlantis.min.js"></script>
		<!-- Atlantis DEMO methods, don't include it in your project! -->
		<script src="/assets/js/setting-demo2.js"></script>
		<script>
			$('#birth').datetimepicker({
				format: 'MM/DD/YYYY'
			});

			$('#state').select2({
				theme: "bootstrap"
			});

			/* validate */

			// validation when select change
			$("#state").change(function() {
				$(this).valid();
			})

			// validation when inputfile change
			$("#uploadImg").on("change", function() {
				$(this).parent('form').validate();
			})

			$("#exampleValidation").validate({
				validClass: "success",
				rules: {
					gender: {
						required: true
					},
					confirmpassword: {
						equalTo: "#password"
					},
					birth: {
						date: true
					},
					uploadImg: {
						required: true,
					},
				},
				highlight: function(element) {
					$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				},
				success: function(element) {
					$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
				},
			});
		</script>
</body>

</html>