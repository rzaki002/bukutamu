<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-image: url('assets/img/PLN_2.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 100%;
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }

        .p-5 {
            padding: 3rem !important; /* Adjust padding as needed */
        }

        .text-center {
            margin-bottom: 20px;
        }

        .btn {
            width: 100%;
            text-align: left;
            padding: 15px;
            margin-bottom: 10px;
        }

        .btn img {
            margin-right: 10px;
        }

        .bg-transparant {
            background: none;
            border: none;
        }
    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HALAMAN LOGIN | SISTEM INFORMASI BUKU TAMU</title>

    <link rel="icon" href="assets/img/logo_pln.png" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-white">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                   
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">SILAHKAN LOGIN SALAH SATU !</h1>
                            </div>
                            <div class="card-body">
                                <a href="internal.php" class="btn btn-success mb-3">
                                    <img src="assets/img/user.png" width="30px" alt="Internal Logo">
                                    PENGUNJUNG INTERNAL
                                </a>
                                <a href="admin.php" class="btn btn-success mb-3">
                                    <img src="assets/img/user.png" width="30px" alt="External Logo">
                                    PENGUNJUNG EKSTERNAL
                                </a>
                                <a href="internal.php" class="btn btn-success mb-3">
                                    <img src="assets/img/admin.png" width="30px" alt="Monitoring Logo">
                                    MONITORING SECURITY
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-3">
        <a class="small bg-transparant" href="#">By. PT PLN (Persero) | 2023 - <?= date('Y') ?></a>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
</body>

</html>
