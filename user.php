<?php
session_start();

//koneksi data base yang beraada di file koneksi
require 'koneksi.php';
// tekan tombol submit apakah berhasil
// if (isset($_POST["submit"])) {

//cara cek apakah data berhasil di tambahkan atau tidak
//     if (tambah($_POST) > 0) {
//         echo "
//             <script>
//                 alert('data berhasil di tambahkan');
//                 document.location.href = 'buku_tamu.php';
//             </script>
//         ";
//     } else {
//         echo "
//         <script>
//             alert('data gagal di tambahkan');
//             document.location.href = 'tambah.php';
//         </script>
//     ";
//     }
// }


?>

<html lang="en" class="fontawesome-i2svg-active fontawesome-i2svg-complete">

<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <!-- my css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer="" src="assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head>

<body class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <h2 class="auth-heading text-center mb-5">Form Pengisian Buku Tamu</h2>
                    <div class="auth-form-container text-start">
                        <form class="auth-form login-form">
                            <div class="id_ mb-3">
                                <label class="sr-only" for="id_nama"></label>
                                <input name="id_nama" type="text" class="form-control id_nama" placeholder="Nama Lengkap..." required="required">
                            </div>
                            <div class="Jenis Kelamin mb-3">
                                <label class="sr-only" for="">Jenis Kelamin</label>
                                <select id="inputState" name="jk" class="form-select" required>
                                    <option selected>Jenis Kelamin...</option>
                                    <option value="laki-laki">LAKI-LAKI</option>
                                    <option value="Perempuan">PEREMPUAN</option>
                                </select>
                            </div>
                            <div class="Jabatan mb-3">
                                <label class="sr-only" for="">Jabatan</label>
                                <input id="" name="jabatan" type="text" class="form-control " placeholder="Jabatan...." required="required">
                            </div>
                            <div class="Alamat mb-3">
                                <label class="sr-only" for="">Alamat</label>
                                <input id="" name="alamat" type="text" class="form-control " placeholder="Alamat...." required="required">
                            </div>
                            <div class="No telepon mb-3">
                                <label class="sr-only" for="">No telepon</label>
                                <input id="" name="notlp" type="int" class="form-control " placeholder="No telepon.... " required="required">
                            </div>
                            <div class="Tanggal mb-3">
                                <label class="sr-only" for="">Tanggal</label>
                                <input id="" name="tglb" type="date" class="form-control " placeholder="Tanggal..." required="required">
                            </div>
                            <div class="keperluan mb-3">
                                <textarea class="form-control" placeholder="Keperluan" name="keperluan" id="floatingTextarea"></textarea>
                                <label class="sr-only" for="floatingTextarea">Keperluan</label>
                            </div>
                            <!-- <div class="email mb-3">
                                <label class="sr-only" for="signin-email">Email</label>
                                <input id="signin-email" name="signin-email" type="email" class="form-control signin-email" placeholder="Email address" required="required">
                            </div> -->
                            <!--//form-group-->
                            <button type="submit" name="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Submit</button>

                            <div class="auth-option text-center pt-2">login for admin <a class="text-link" href="login.php">here</a>.</div>
                            <!-- <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Tambah Data <button> -->
                        </form>

                    </div>
                    <!--//auth-form-container-->

                </div>
                <!--//auth-body-->

                <footer class="app-auth-footer">
                    <div class="container text-center py-3">
                        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                        <small class="copyright">Designed with <svg class="svg-inline--fa fa-heart fa-w-16" style="color: #fb866a;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
                            </svg><!-- <i class="fas fa-heart" style="color: #fb866a;"></i> Font Awesome fontawesome.com --> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

                    </div>
                </footer>
                <!--//app-auth-footer-->
            </div>
            <!--//flex-column-->
        </div>
        <!--//auth-main-col-->
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                </div>
                <!--//auth-background-overlay-->
            </div>
            <!--//auth-background-col-->

        </div>
        <!--//row-->





</body>

</html>