<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="/assets/css/atlantis.css">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/5fbcc24921.js" crossorigin="anonymous"></script>


    <!-- Custom -->
    <link rel="stylesheet" href="/assets/css/customerstyle.css">
    <link rel="shortcut icon" href="/assets/img/favicon/favicon.png" type="image/x-icon">

    <style>
    @media (max-width: 1024px) {
        .slogan {
            background-image: none;
        }
    }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg " id="navbar" style="background:#FDF9D5">
        <div class="container p-2">
            <img src="/assets/img/tokos.png" style="height: 60px; background-size: cover;" alt="">
            <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span style="height: 3vh;" class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" style="height: 3vw;" id="navbarNavAltMarkup">
                <div class=" navbar-nav" style="display: flex;">
                    <a href="/admin/index">Pindah</a>
                    <a class="nav-link <?php if ($title == 'Customer Dashboard | Tokos') : echo 'active';
                                        endif; ?>" style="font-weight: 700; font-size: large;"
                        href="/customer/index">Home</a>
                    <a class="nav-link <?php if ($title == 'Customer Produk | Tokos') : echo 'active';
                                        endif; ?>" href="/customer/produk">Produk</a>

                    <a class="nav-link <?php if ($title == 'Customer Keranjang | Tokos') : echo 'active';
                                        endif; ?>" href="/customer/keranjang/">Keranjang</a>
                    <a class="nav-link <?php if ($title == 'Admin Dashboard | Tokos') : echo 'active';
                                        endif; ?>" href="profile.html">Profile</a>
                </div>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>


    <footer>
        <div class="isi" style="border-bottom:#FDF9D5 0.1vw solid;">
            <div class="container justify-content-end ">
                <div class="main" style="margin-top: 9vw;">
                    <p style="font-size: 2vw; font-weight: 700;  padding-top: 3vw;">Social Media</p>
                </div>
                <div class="akun" style="margin-bottom: 2vw;">
                    <img src="/assets/img/facebook.png" style="width: 15px;background-size: cover;" alt=""><a
                        class="facebook" href="">Tokos</a><br>
                    <img src="/assets/img/mail.png" style="width: 15px;background-size: cover;" alt=""><a class="mail"
                        href="">tokos@gmail.com</a><br>
                    <img src="/assets/img/twitter.png" style="width: 15px;background-size: cover;" alt=""><a
                        class="facebook" href="">toko_anak_kos</a>
                </div>
            </div>
        </div>
        <div class="container" style="width: 90%;">
            <p style="padding: 2vh 0;font-size: 1vw;"> Tokos Copyright © 2021 Toko Anak Kos Tembalang.</p>
        </div>
    </footer>

    <!-- Script -->

    <!-- Navbar scroll -->
    <script src="navbar.js">
    </script>


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

    <!-- Datatables -->
    <script src="/assets/js/plugin/datatables/datatables.min.js"></script>
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

</body>


</html>