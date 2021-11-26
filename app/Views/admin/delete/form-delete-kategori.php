<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
		
		<!-- Formulir disini -->
		<div class="main-panel">
			<div class="container">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Hapus Kategori</h4>
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
								<a href="/admin/barang">Data Kategori</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Hapus Kategori</a>
							</li>
						</ul>
					</div> <!-- end page header -->

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Hapus Kategori</div>
								</div> <!-- end card header -->

								<form action="/edit/hapuskategori/<?= $data['idkategori']; ?>" method="POST">
									<div class="card-body">
										<div class="form-group form-show-validation row">
											<label for="nameKategori" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Kategori <span class="required-label">*</span></label>
											<div class="col-lg-7 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="namaKategori" name="namaKategori" value="<?= $data['nama']; ?>" disabled>
											</div>
										</div> <!-- end nama -->
									</div> <!-- end card body -->

									<div class="card-action">
										<div class="row">
											<div class="col-md-12 d-flex justify-content-end">
												<a href="/edit/detailhapuskategori/<?= $data['idkategori'];?>" class="btn btn-info" style="border-radius: 100px;">Kembali</a>
												<input class="btn btn-danger ml-4" type="submit" value="Hapus" style="border-radius: 100px;">
											</div>										
										</div>
									</div> <!-- end card action -->
								</form> <!-- end form -->
							</div> <!-- end card -->
						</div> <!-- end col 12 -->
					</div> <!-- end page body -->
				</div> <!-- end page inner -->
			</div> <!-- end container -->

			<footer class="footer text-center">	
			<p>Copyright &copy; 2021 | <span class="fw-bold">Tokos</span> Toko Anak Kos.</p>
					</footer> <!-- end footer -->
		</div> <!-- end main panel -->
	
<?= $this->endSection(); ?>