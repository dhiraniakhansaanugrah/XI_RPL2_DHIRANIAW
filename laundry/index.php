<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LaundryKu - Sistem Informasi Laundry</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <style>

        * {
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f8fafc;
            color: #263238;
        }

        /* ================= NAVBAR ================= */

        .navbar-custom {
            background: rgba(255,255,255,0.96);
            border: none;
            border-radius: 0;
            margin: 0;
            padding: 10px 0;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .navbar-brand {
            font-size: 25px;
            font-weight: bold;
            color: #1597e5 !important;
            letter-spacing: 1px;
        }

        .navbar-brand span {
            color: #263238;
        }

        .navbar-custom .navbar-nav > li > a {
            color: #263238;
            font-weight: 600;
            padding: 18px 18px;
            transition: 0.3s;
        }

        .navbar-custom .navbar-nav > li > a:hover {
            color: #1597e5;
            background: transparent;
        }

        .login-menu {
            background: #1597e5 !important;
            color: white !important;
            border-radius: 25px;
            margin-top: 5px;
            padding: 13px 25px !important;
        }

        .login-menu:hover {
            background: #087fc4 !important;
            color: white !important;
        }


        /* ================= HERO ================= */

        .hero {
            min-height: 650px;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #e9f8ff 0%, #ffffff 55%, #e9f5ff 100%);
            display: flex;
            align-items: center;
        }

        .hero:before {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: rgba(21,151,229,0.10);
            right: -150px;
            top: -150px;
        }

        .hero:after {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            background: rgba(21,151,229,0.08);
            left: -150px;
            bottom: -150px;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            padding: 70px 0;
        }

        .hero-label {
            display: inline-block;
            background: #dff3ff;
            color: #087fc4;
            padding: 9px 18px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: 52px;
            line-height: 1.15;
            font-weight: bold;
            color: #172b4d;
            margin-top: 0;
            margin-bottom: 25px;
        }

        .hero h1 span {
            color: #1597e5;
        }

        .hero-text {
            font-size: 18px;
            line-height: 1.8;
            color: #667085;
            max-width: 600px;
            margin-bottom: 35px;
        }

        .btn-main {
            display: inline-block;
            background: #1597e5;
            color: white;
            padding: 15px 32px;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            margin-right: 10px;
            box-shadow: 0 8px 20px rgba(21,151,229,0.25);
            transition: 0.3s;
        }

        .btn-main:hover {
            background: #087fc4;
            color: white;
            text-decoration: none;
            transform: translateY(-3px);
        }

        .btn-outline {
            display: inline-block;
            border: 2px solid #1597e5;
            color: #1597e5;
            padding: 13px 30px;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-outline:hover {
            background: #1597e5;
            color: white;
            text-decoration: none;
        }


        /* ================= HERO CARD ================= */

        .laundry-card {
            position: relative;
            z-index: 2;
            background: white;
            border-radius: 25px;
            padding: 35px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.12);
            text-align: center;
            max-width: 400px;
            margin: auto;
        }

        .laundry-icon {
            width: 110px;
            height: 110px;
            background: #e4f5ff;
            border-radius: 50%;
            margin: 0 auto 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 55px;
        }

        .laundry-card h3 {
            color: #172b4d;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .laundry-card p {
            color: #777;
            line-height: 1.7;
        }

        .mini-info {
            margin-top: 25px;
            display: flex;
            justify-content: space-around;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }

        .mini-info strong {
            display: block;
            color: #1597e5;
            font-size: 20px;
        }

        .mini-info small {
            color: #888;
        }


        /* ================= ABOUT ================= */

        .section {
            padding: 90px 0;
        }

        .about-section {
            background: white;
        }

        .section-label {
            color: #1597e5;
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .section-title {
            font-size: 36px;
            font-weight: bold;
            color: #172b4d;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .section-text {
            color: #667085;
            font-size: 16px;
            line-height: 1.9;
        }

        .about-box {
            padding: 25px;
            background: #f5fbff;
            border-radius: 15px;
            margin-top: 25px;
        }

        .about-box h4 {
            font-weight: bold;
            color: #172b4d;
        }

        .about-box p {
            color: #777;
            line-height: 1.7;
        }


        /* ================= SERVICES ================= */

        .services-section {
            background: #f5f9fc;
        }

        .title-center {
            text-align: center;
            margin-bottom: 50px;
        }

        .title-center .section-title {
            margin-bottom: 10px;
        }

        .service-card {
            background: white;
            border-radius: 18px;
            padding: 35px 25px;
            min-height: 250px;
            margin-bottom: 30px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.06);
            transition: 0.3s;
            text-align: center;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.10);
        }

        .service-icon {
            width: 70px;
            height: 70px;
            border-radius: 18px;
            background: #e6f6ff;
            color: #1597e5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin: 0 auto 20px;
        }

        .service-card h3 {
            color: #172b4d;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .service-card p {
            color: #777;
            line-height: 1.7;
        }


        /* ================= CTA ================= */

        .cta {
            background: linear-gradient(135deg, #1597e5, #087fc4);
            color: white;
            text-align: center;
            padding: 80px 20px;
        }

        .cta h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .cta p {
            font-size: 17px;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .btn-white {
            display: inline-block;
            background: white;
            color: #087fc4;
            padding: 14px 35px;
            border-radius: 30px;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-white:hover {
            color: #087fc4;
            text-decoration: none;
            transform: translateY(-3px);
        }


        /* ================= FOOTER ================= */

        .footer {
            background: #172b4d;
            color: white;
            padding: 35px 0;
            text-align: center;
        }

        .footer h3 {
            font-weight: bold;
            margin-top: 0;
        }

        .footer p {
            color: #b8c4d4;
            margin: 8px 0;
        }


        /* ================= RESPONSIVE ================= */

        @media (max-width: 767px) {

            .hero {
                min-height: auto;
                text-align: center;
            }

            .hero h1 {
                font-size: 38px;
            }

            .hero-text {
                margin-left: auto;
                margin-right: auto;
            }

            .laundry-card {
                margin-top: 40px;
            }

            .section {
                padding: 60px 20px;
            }

            .section-title {
                font-size: 30px;
            }

            .btn-main,
            .btn-outline {
                margin-bottom: 10px;
            }

        }

    </style>

</head>


<body>


<!-- ==================================================
     NAVBAR
================================================== -->

<nav class="navbar navbar-custom">

    <div class="container">

        <div class="navbar-header">

            <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target="#navbar-menu">

                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>

            <a class="navbar-brand" href="index.php">
                LAUNDRY<span>KU</span>
            </a>

        </div>


        <div class="collapse navbar-collapse" id="navbar-menu">

            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a href="#beranda">
                        Beranda
                    </a>
                </li>

                <li>
                    <a href="#tentang">
                        Tentang
                    </a>
                </li>

                <li>
                    <a href="#layanan">
                        Layanan
                    </a>
                </li>

                <li>
                    <a href="login_page.php" class="login-menu">
                        Login
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>



<!-- ==================================================
     HERO
================================================== -->

<section class="hero" id="beranda">

    <div class="container">

        <div class="row">

            <div class="col-md-7">

                <div class="hero-content">

                    <div class="hero-label">
                        ✨ SISTEM INFORMASI LAUNDRY
                    </div>

                    <h1>
                        Laundry Lebih
                        <span>Mudah & Teratur</span>
                    </h1>

                    <p class="hero-text">

                        Kelola data pelanggan, transaksi,
                        dan laporan laundry dengan lebih
                        cepat, mudah, dan terorganisir
                        menggunakan sistem informasi laundry.

                    </p>


                    <a
                        href="login_page.php"
                        class="btn-main">

                        Mulai Sekarang →

                    </a>


                    <a
                        href="#layanan"
                        class="btn-outline">

                        Lihat Layanan

                    </a>

                </div>

            </div>


            <div class="col-md-5">

                <div class="laundry-card">

                    <div class="laundry-icon">
                        🧺
                    </div>

                    <h3>
                        LaundryKu
                    </h3>

                    <p>
                        Solusi pengelolaan laundry
                        yang praktis dan terintegrasi.
                    </p>


                    <div class="mini-info">

                        <div>
                            <strong>24/7</strong>
                            <small>Sistem</small>
                        </div>

                        <div>
                            <strong>Fast</strong>
                            <small>Transaksi</small>
                        </div>

                        <div>
                            <strong>Easy</strong>
                            <small>Manage</small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ==================================================
     TENTANG
================================================== -->

<section class="section about-section" id="tentang">

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <span class="section-label">
                    Tentang Kami
                </span>

                <h2 class="section-title">
                    Kelola Laundry Tanpa Ribet
                </h2>

                <p class="section-text">

                    Sistem Informasi Laundry dirancang untuk
                    membantu proses pengelolaan usaha laundry
                    menjadi lebih mudah dan terorganisir.

                </p>

                <p class="section-text">

                    Dengan sistem ini, pengelolaan pelanggan,
                    transaksi, dan laporan dapat dilakukan
                    dalam satu sistem.

                </p>

            </div>


            <div class="col-md-6">

                <div class="about-box">

                    <h4>
                        ✓ Data Lebih Terorganisir
                    </h4>

                    <p>
                        Data pelanggan dan transaksi
                        tersimpan secara terstruktur.
                    </p>

                </div>


                <div class="about-box">

                    <h4>
                        ✓ Proses Lebih Cepat
                    </h4>

                    <p>
                        Membantu mempercepat proses
                        pencatatan transaksi laundry.
                    </p>

                </div>


                <div class="about-box">

                    <h4>
                        ✓ Laporan Lebih Mudah
                    </h4>

                    <p>
                        Mempermudah pengelolaan dan
                        pengecekan laporan transaksi.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ==================================================
     LAYANAN
================================================== -->

<section class="section services-section" id="layanan">

    <div class="container">

        <div class="title-center">

            <span class="section-label">
                Fitur Sistem
            </span>

            <h2 class="section-title">
                Semua Lebih Teratur
            </h2>

            <p class="section-text">
                Fitur yang membantu pengelolaan laundry
            </p>

        </div>


        <div class="row">


            <!-- PELANGGAN -->

            <div class="col-md-4">

                <div class="service-card">

                    <div class="service-icon">
                        👤
                    </div>

                    <h3>
                        Data Pelanggan
                    </h3>

                    <p>
                        Mengelola data pelanggan
                        dengan lebih mudah dan terstruktur.
                    </p>

                </div>

            </div>



            <!-- TRANSAKSI -->

            <div class="col-md-4">

                <div class="service-card">

                    <div class="service-icon">
                        🧾
                    </div>

                    <h3>
                        Transaksi Laundry
                    </h3>

                    <p>
                        Mencatat dan mengelola transaksi
                        laundry secara lebih cepat.
                    </p>

                </div>

            </div>



            <!-- LAPORAN -->

            <div class="col-md-4">

                <div class="service-card">

                    <div class="service-icon">
                        📊
                    </div>

                    <h3>
                        Laporan
                    </h3>

                    <p>
                        Membantu melihat dan mengelola
                        laporan transaksi laundry.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ==================================================
     CTA
================================================== -->

<section class="cta">

    <div class="container">

        <h2>
            Siap Mengelola Laundry?
        </h2>

        <p>
            Masuk ke sistem untuk mulai mengelola
            data dan transaksi laundry.
        </p>

        <a
            href="login_page.php"
            class="btn-white">

            Login ke Sistem →

        </a>

    </div>

</section>



<!-- ==================================================
     FOOTER
================================================== -->

<footer class="footer">

    <div class="container">

        <h3>
            LAUNDRYKU
        </h3>

        <p>
            Sistem Informasi Laundry
        </p>

        <p>
            &copy; 2026 LaundryKu. All Rights Reserved.
        </p>

    </div>

</footer>


</body>

</html>