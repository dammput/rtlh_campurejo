<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RTLH CAMPUREJO</title>


    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    
    <!-- css -->
    <style>
        .body_login{
            background-color: grey;
        }

    </style>
</head>

<body class="">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-6 .bg-login-image"><img src="assets/img/login2.png" width="110%" alt="desa" ></div>
                            
                            <div class="col-lg-6">
                                <div class="p-5"><br><br><br>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN SISTEM</h1>
                                    </div>
                                    <form action="role_login.php" method="post" class="user">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" id="" placeholder="Enter Username"><br>
                                            <input type="password" name="password" class="form-control form-control-user" id="" placeholder="Password"><br>
                                            <input type="submit" class="btn btn-info btn-user btn-block" value="Login">
                                        </div>  
                                     
                                    </form>
                                    

                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo '<script type="text/javascript">';
            echo 'alert("Login gagal! username dan password salah!")';
            echo '</script>';
        } else if ($_GET['pesan'] == "logout") {
            echo '<script type="text/javascript">';
            echo 'alert("Silahkan login kembali untuk masuk.")';
            echo '</script>';
        } else if ($_GET['pesan'] == "belum_login") {
            echo '<script type="text/javascript">';
            echo 'alert("Silakhan login dulu.")';
            echo '</script>';
        }
    }
    ?>






    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>