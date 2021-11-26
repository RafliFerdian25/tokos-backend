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
                        </li> <!-- end nav data barang -->
                        <!-- nav Tambah barang -->
                        <li class="nav-item <?php if ($title == 'Form Tambah Barang | Sumber Jaya Furniture') : echo 'active';
                                            endif; ?>">
                            <a href="/tambah/tambah">
                                <i class="fas fa-plus-circle"></i>
                                <p>Tambah Barang</p>
                            </a>
                        </li> <!-- end nav tambah barang -->
                    </ul> <!-- end nav primary -->
                </div> <!-- end sidebar content -->
            </div> <!-- end sidebar wripper -->
        </div> <!-- End Sidebar -->