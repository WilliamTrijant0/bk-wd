<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Poliklinik</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./dist/css/welcome_styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0C4C93;">
        <div class="container px-5">
            <a class="navbar-brand" href="">Poliklinik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <?php if ($muncul) : ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="http://<?= $_SERVER['HTTP_HOST'] ?>/poliklinik/pages/<?= $arah ?>">Dashboard</a></li>
                    </ul>
                </div>
            <?php endif ?>
        </div>
    </nav>
    <!-- Header-->
    <header class="py-5" style="background-color: #0C4C93;">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <p class="lead text-white-50 mb-4">poliklinik Bimbingan Karir 2024 Web Development</p>
                </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <?php if (!$muncul) : ?>
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                        <h2 class="h4 fw-bolder">Registrasi Sebagai Pasien</h2>
                        <p>Apabila Anda adalah seorang Pasien, silahkan Registrasi terlebih dahulu untuk melakukan pendaftaran sebagai Pasien!</p>
                        <a class="text-decoration-none" href="http://<?= $_SERVER['HTTP_HOST'] ?>/poliklinik/pages/auth/register.php">
                            Klik Link Berikut
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                        <h2 class="h4 fw-bolder">Login Sebagai Dokter</h2>
                        <p>Apabila Anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk memulai melayani Pasien!</p>
                        <a class="text-decoration-none" href="http://<?= $_SERVER['HTTP_HOST'] ?>/poliklinik/pages/auth/login.php">
                            Klik Link Berikut
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>