<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?= $title; ?></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="/assets/img/favicon-sfj.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
    WebFont.load({
        google: {
            "families": ["Lato:300,400,700,900"]
        },
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                "simple-line-icons"
            ],
            urls: ['/assets/css/fonts.min.css']
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/atlantis.css">

    <!-- custom -->
    <link rel="stylesheet" href="/assets/css/index-styles.css">

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
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
                                aria-expanded="false" aria-controls="search-nav">
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
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="/assets/img/ava-musa.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="/assets/img/ava-musa.jpg"
                                                    alt="image profile" class="avatar-img rounded"></div>
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
                        <li class="nav-item <?php if ($title == 'Admin Dashboard | Sumber Jaya Furniture') : echo 'active';
											endif; ?>">
                            <a href="/">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li> <!-- end nav item -->

                        <li class="nav-item <?php if ($title == 'Data Barang | Sumber Jaya Furniture') : echo 'active';
											endif; ?>">
                            <a href="/admin/barang">
                                <i class="fas fa-box-open"></i>
                                <p>Data Barang</p>
                            </a>
                        </li> <!-- end nav data barang -->

                        <li class="nav-item <?php if ($title == 'Data Transaksi | Sumber Jaya Furniture') : echo 'active';
											endif; ?>">
                            <a href="/admin/transaksi">
                                <i class="fas fa-shopping-cart"></i>
                                <p>Data Transaksi</p>
                            </a>
                        </li> <!-- end nav data transaksi -->
                    </ul> <!-- end nav primary -->
                </div> <!-- end sidebar content -->
            </div> <!-- end sidebar wripper -->
        </div> <!-- End Sidebar -->

        <!-- Content -->
        <div class="main-panel">
            <div class="container">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Dashboard Admin</h2>
                                <h5 class="text-white op-7 mb-2">Sumber Jaya Furniture selalu menyediakan barang
                                    berkualitas, kuat, dan tahan lama.</h5>
                            </div>
                            <div class="ml-md-auto py-2 py-md-0">
                                <a href="/tambah/tambah" class="btn btn-white btn-border btn-round mr-2">Tambah
                                    Barang</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end panel header -->

                <div class="page-inner mt--5">
                    <!-- 4 card -->
                    <div class="row mt--2">
                        <!-- sales card -->
                        <div class="col-sm-12 col-md-4">
                            <div class="card card-stats card-round">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-icon">
                                            <div class="icon-big text-center icon-success bubble-shadow-small">
                                                <i class="flaticon-graph"></i>
                                            </div>
                                        </div>
                                        <div class="col col-stats ml-3 ml-sm-0">
                                            <div class="numbers">
                                                <?php foreach ($total as $sum) : ?>
                                                <p class="card-category">Total Barang Terjual</p>
                                                <h4 class="card-title"><?= $sum['jumlah']; ?></h4>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end sales card -->

                        <!-- order card -->
                        <div class="col-sm-12 col-md-4">
                            <div class="card card-stats card-round">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-icon">
                                            <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                                <i class="flaticon-success"></i>
                                            </div>
                                        </div>
                                        <div class="col col-stats ml-3 ml-sm-0">
                                            <div class="numbers">
                                                <?php foreach ($pembeli as $pembeli) : ?>
                                                <p class="card-category">Total Pembelian</p>
                                                <h4 class="card-title"><?= $pembeli['idpenjualan']; ?></h4>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end order card -->

                        <!-- income card -->
                        <div class="col-sm-12 col-md-4">
                            <div class="card card-stats card-round">
                                <div class="card-body ">
                                    <div class="row align-items-center">
                                        <div class="col-icon">
                                            <div class="icon-big text-center icon-primary bubble-shadow-small">
                                                <i class="flaticon-users"></i>
                                            </div>
                                        </div>
                                        <div class="col col-stats ml-3 ml-sm-0">
                                            <div class="numbers">
                                                <?php foreach ($pendapatan as $pendapatan) : ?>
                                                <p class="card-category">Total Pendapatan</p>
                                                <h4 class="card-title">IDR
                                                    <?= number_format($pendapatan['total_penjualan']); ?></h4>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end income card -->

                    </div> <!-- end 4 card -->

                    <!-- table bulanan and top sales -->
                    <div class="row">
                        <!-- top sales -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Produk Terlaris</div>
                                </div> <!-- end card header -->

                                <div class="card-body pb-0">

                                    <!-- top sale -->
                                    <?php foreach ($terlaris as $terlaris) : ?>
                                    <div class="separator-dashed"></div>
                                    <div class="d-flex">
                                        <div class="avatar">
                                            <img src="assets/img/logoproduct3.svg" alt="..."
                                                class="avatar-img rounded-circle">
                                        </div>
                                        <div class="flex-1 pt-1 ml-2">
                                            <h6 class="fw-bold mb-1"><?= $terlaris['namaBarang']; ?></h6>
                                            <small class="text-muted"><?= $terlaris['namaKategori']; ?></small>
                                        </div>
                                        <div class="d-flex ml-auto align-items-center">
                                            <h3 class="text-info fw-bold"><?= $terlaris['total_terjual']; ?></h3>
                                        </div>
                                    </div> <!-- End top sale -->
                                    <?php endforeach; ?>

                                    <div class="separator-dashed"></div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div> <!-- end top sales -->

                        <!-- tabel bulanan -->
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Penjualan Bulanan</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table teble table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Bulan</th>
                                                    <th scope="col">Jumlah</th>
                                                    <th scope="col">Total Penjualan</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($bulan as $bulan) : ?>
                                                <tr>
                                                    <td><?php if ($bulan['bulan'] == 1) {
																echo "Januari";
															} else if ($bulan['bulan'] == 2) {
																echo "Februari";
															} else if ($bulan['bulan'] == 3) {
																echo "Maret";
															} else if ($bulan['bulan'] == 4) {
																echo "April";
															} else if ($bulan['bulan'] == 5) {
																echo "Mei";
															} else if ($bulan['bulan'] == 6) {
																echo "Juni";
															} else if ($bulan['bulan'] == 7) {
																echo "Juli";
															} else if ($bulan['bulan'] == 8) {
																echo "Agustus";
															} else if ($bulan['bulan'] == 9) {
																echo "September";
															} else if ($bulan['bulan'] == 10) {
																echo "Oktober";
															} else if ($bulan['bulan'] == 11) {
																echo "November";
															} else if ($bulan['bulan'] == 12) {
																echo "Desember";
															}
															?></td>
                                                    <td><?= $bulan['jumlah']; ?></td>
                                                    <td><?= number_format($bulan['total_penjualan']); ?></td>
                                                    <td><a href="/admin/laporan/<?= $bulan['bulan']; ?>"
                                                            class="badge badge-info">Lihat Detail</a></td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <!-- End Bulan -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end tabel bulanan -->
                    </div> <!-- end bulanan and sales -->
                </div> <!-- end page inner -->
            </div> <!-- end container -->

            <footer class="footer text-center">
                <p>Copyright &copy; 2021 | <span class="fw-bold">Sumber Jaya Furniture</span>. Jaya Jaya Jaya!</p>
            </footer> <!-- end footer -->
        </div> <!-- end main panel -->
    </div> <!-- end wrapper -->

    <!--   Core JS Files   -->
    <script src="/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="/assets/js/core/popper.min.js"></script>
    <script src="/assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Moment JS -->
    <script src="/assets/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="/assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="/assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="/assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- Bootstrap Toggle -->
    <script src="/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="/assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Dropzone -->
    <script src="/assets/js/plugin/dropzone/dropzone.min.js"></script>

    <!-- Fullcalendar -->
    <script src="/assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

    <!-- DateTimePicker -->
    <script src="/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

    <!-- Bootstrap Tagsinput -->
    <script src="/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

    <!-- Bootstrap Wizard -->
    <script src="/assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

    <!-- jQuery Validation -->
    <script src="/assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

    <!-- Summernote -->
    <script src="/assets/js/plugin/summernote/summernote-bs4.min.js"></script>

    <!-- Select2 -->
    <script src="/assets/js/plugin/select2/select2.full.min.js"></script>

    <!-- Sweet Alert -->
    <script src="/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Owl Carousel -->
    <script src="/assets/js/plugin/owl-carousel/owl.carousel.min.js"></script>

    <!-- Magnific Popup -->
    <script src="/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Atlantis JS -->
    <script src="/assets/js/atlantis.min.js"></script>

    <!-- INDEX SCRIPTS -->
    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="/assets/js/setting-demo.js"></script>
    <script src="/assets/js/demo.js"></script>
    <script>
    Circles.create({
        id: 'circles-1',
        radius: 45,
        value: 60,
        maxValue: 100,
        width: 7,
        text: 5,
        colors: ['#f1f1f1', '#FF9E27'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    })

    Circles.create({
        id: 'circles-2',
        radius: 45,
        value: 70,
        maxValue: 100,
        width: 7,
        text: 36,
        colors: ['#f1f1f1', '#2BB930'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    })

    Circles.create({
        id: 'circles-3',
        radius: 45,
        value: 40,
        maxValue: 100,
        width: 7,
        text: 12,
        colors: ['#f1f1f1', '#F25961'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    })

    var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

    var mytotalIncomeChart = new Chart(totalIncomeChart, {
        type: 'bar',
        data: {
            labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
            datasets: [{
                label: "Total Income",
                backgroundColor: '#ff9e27',
                borderColor: 'rgb(23, 125, 255)',
                data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    ticks: {
                        display: false //this will remove only the label
                    },
                    gridLines: {
                        drawBorder: false,
                        display: false
                    }
                }],
                xAxes: [{
                    gridLines: {
                        drawBorder: false,
                        display: false
                    }
                }]
            },
        }
    });

    $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: 'line',
        height: '70',
        width: '100%',
        lineWidth: '2',
        lineColor: '#ffa534',
        fillColor: 'rgba(255, 165, 52, .14)'
    });
    </script>
</body>

</html>