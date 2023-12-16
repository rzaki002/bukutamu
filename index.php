<!DOCTYPE html>
<html lang="en">
<head>

<style>
    body {
        background-image: url('assets/img/bg.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your image file */
        background-size: cover; /* This property ensures that the background image covers the entire body */
        background-position: center; /* This property centers the background image */
        background-repeat: no-repeat; /* This property ensures that the background image is not repeated */
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

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class ="col-lg-6 d-lg-block bg-white shadow-lg
                            p-5 text-center">
                            <img src="assets/img/logo_pln.png">
                            <p class="text-black">
                            <b>SISTEM MANAJEMEN K3</b>
                            <p><b>PT PLN(PERSERO) UIW SUMATERA SELATAN, JAMBI, DAN BENGKULU</b></p>
                            <p><b>UNIT PELAKSANA PELAYANAN PELANGGAN PALEMBANG</b></p>
                     </p>
</p>
                        </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">SILAHKAN LOGIN!</h1>
                                    </div>
                                    <form class="user" action="cek_login.php" 
                                    method="POST">
                                        <div class="form-group">
                                            <input type="text" name ="username"
                                            class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Address...">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" 
                                            name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <br>
                                        <button class ="btn btn-primary btn user 
                                        btn-block">Login</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                <a class="small bg-transparant" href="#">By. PT PLN (Persero) | 2023 - <?=date('Y') ?></a>  
                        </div>
                    </div>
                </div>

            </div>

        </div>
        
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