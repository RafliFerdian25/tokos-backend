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

        <!-- main panel -->
        <div class="main-panel">
            <div class="container">
                <div class="page-inner">
                    <!-- page header -->
                    <div class="page-header">
                        <h4 class="page-title">Data Barang</h4>
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
                        </ul>
                    </div> <!-- end page header -->
                    <!-- barang section -->
                    <div class="barang__section">
                        <!-- menampilkan semua barang -->
                        <div class="container" style="margin-top: 60px;">
                            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                                <!-- mengambil data barang -->
                                <?php foreach ($barang as $data) : ?>
                                <?php $idbarang = $data['idbarang']; ?>
                                <div class="col-12 col-md-4 col-lg-3 mb-4">
                                    <div class="p-3 border ">
                                        <!-- barang content -->
                                        <div class="barang__content">
                                            <div class="col">
                                                <div class="">
                                                    <img src="/assets/img/productimg/<?= $data['file_gambar'] ?>"
                                                        class="data__barang__gambar">
                                                </div> <!-- end pictures -->
                                                <h4 class="fw-bold"> <?= $data['nama']; ?></h4>
                                                <p> Rp <?= $data['harga']; ?> <br> Stok: <?= $data['stok']; ?> </p>
                                                <div class="barang__action">
                                                    <a href="/admin/detail/<?= $data['idbarang']; ?>">
                                                        <div class="btn btn-warning p-3 me-2">Ubah</div>
                                                    </a>
                                                    <a href="/edit/detailhapusbarang/<?= $data['idbarang']; ?>">
                                                        <div class="btn btn-danger p-3">Hapus</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end barang content -->
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <!-- end ambil data barang -->
                            </div>
                        </div>
                    </div>
                    <!-- end barang section -->
                    <!-- Tabel Barang -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title">Data Barang</h4>
                                        <a class="d-block ml-auto" href="/tambah/tambah">
                                            <button class="btn btn-primary btn-round d-flex align-items-center">
                                                <i class="la flaticon-add d-block mr-2"></i>
                                                <span class="d-block">Tambah Barang</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <!-- alert kelola barang -->
                                    <?php if (session()->getFlashdata('add-msg-barang')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashdata('add-msg-barang'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (session()->getFlashdata('edit-msg-barang')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashdata('edit-msg-barang'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (session()->getFlashdata('delete-msg-barang')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= session()->getFlashdata('delete-msg-barang'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <!-- end alert kelola barang -->

                                    <div class="table-responsive">
                                        <table id="add-row" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Barang</th>
                                                    <th>Kategori</th>
                                                    <th>Harga</th>
                                                    <th>Stok</th>
                                                    <th style="width: 10%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($barang as $data) : ?>
                                                <?php $idbarang = $data['idbarang']; ?>
                                                <tr>
                                                    <td><?= $j; ?></td>
                                                    <td><?= $data['nama']; ?></td>
                                                    <td><?= $data['kategori']; ?></td>
                                                    <td><?= $data['harga']; ?></td>
                                                    <td><?= $data['stok']; ?></td>
                                                    <td>
                                                        <div class="form-button-action">
                                                            <a href="/admin/detail/<?= $data['idbarang']; ?>"
                                                                class="d-flex">
                                                                <button type="button" data-toggle="tooltip" title=""
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Lihat dan Edit">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a href="/edit/detailhapusbarang/<?= $data['idbarang']; ?>"
                                                                class="d-flex">
                                                                <button type="button" data-toggle="tooltip" title=""
                                                                    class="btn btn-link btn-danger"
                                                                    data-original-title="Hapus">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php $j++; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end tabel barang -->

                        <!-- Tabel Kategori -->
                        <div class="col-md-12">
                            <div id="data-kategori" class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title">Data Kategori</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- alert kelola kategori -->
                                    <?php if (session()->getFlashdata('edit-msg-kategori')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashdata('edit-msg-kategori'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (session()->getFlashdata('delete-msg-kategori')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= session()->getFlashdata('delete-msg-kategori'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <!-- end alert kelola kategori -->

                                    <div class="table-responsive">
                                        <table id="add-row2" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kategori</th>
                                                    <th style="width: 10%">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($kategori as $data) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $data['nama']; ?></td>
                                                    <td>
                                                        <div class="form-button-action">
                                                            <a href="/edit/kategori/<?= $data['idkategori']; ?>"
                                                                class="d-flex">
                                                                <button type="button" data-toggle="tooltip" title=""
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Lihat dan Edit">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a href="/edit/detailhapuskategori/<?= $data['idkategori']; ?>"
                                                                class="d-flex">
                                                                <button type="button" data-toggle="tooltip" title=""
                                                                    class="btn btn-link btn-danger"
                                                                    data-original-title="Hapus">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div> <!-- end tabel kategori -->
                    </div> <!-- end row -->
                </div> <!-- end page inner -->
            </div> <!-- end container -->

            <footer class="footer text-center">
                <p>Copyright &copy; 2021 | <span class="fw-bold">Sumber Jaya Furniture</span>. Jaya Jaya Jaya!</p>
            </footer> <!-- end footer -->
        </div> <!-- end main panel -->
    </div>

    <!--   Core JS Files   -->
    <script src="/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="/assets/js/core/popper.min.js"></script>
    <script src="/assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- Bootstrap Toggle -->
    <script src="/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Datatables -->
    <script src="/assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Atlantis JS -->
    <script src="/assets/js/atlantis.min.js"></script>

    <!-- DATA BARANG SCRIPTS -->
    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="/assets/js/setting-demo2.js"></script>
    <script>
    $(document).ready(function() {
        $('#basic-datatables').DataTable({});

        $('#multi-filter-select').DataTable({
            "pageLength": 5,
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var select = $(
                            '<select class="form-control"><option value=""></option></select>'
                        )
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d +
                            '</option>')
                    });
                });
            }
        });

        // Add Row
        $('#add-row').DataTable({
            "pageLength": 5,
        });

        var action =
            '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Lihat dan Edit"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus"> <i class="far fa-trash-alt"></i> </button> </div> </td>';

        $('#addRowButton').click(function() {
            $('#add-row').dataTable().fnAddData([
                $("#addName").val(),
                $("#addPosition").val(),
                $("#addOffice").val(),
                action
            ]);
            $('#addRowModal').modal('hide');

        });


        $('#add-row2').DataTable({
            "pageLength": 5,
        });

        var action =
            '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Lihat dan Edit"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus"> <i class="far fa-trash-alt"></i> </button> </div> </td>';

        $('#addRowButton').click(function() {
            $('#add-row2').dataTable().fnAddData([
                $("#addName").val(),
                $("#addPosition").val(),
                $("#addOffice").val(),
                action
            ]);
            $('#addRowModal').modal('hide');

        });
    });
    </script>
    <script>
    function delete_barang(idbarang) {
        if (confirm("Are you sure you want to remove it?")) {
            window.location.href = "<?php echo base_url(); ?>/edit/hapusbarang/" + idbarang;
        }
        return false;
    }
    </script>
</body>

</html>