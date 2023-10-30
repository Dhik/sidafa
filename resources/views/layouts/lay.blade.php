<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="CryptoDash admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, CryptoDash Cryptocurrency Dashboard Template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="ThemeSelection">
    <title>Dasboard Fortech Analytic</title>
    <link rel="apple-touch-icon" href="../../../app-assetss/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" href="../../../app-assetss/images/ico/apple-icon-120.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i|Comfortaa:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assetss/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assetss/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assetss/vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assetss/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assetss/css/core/menu/menu-types/vertical-compact-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assetss/vendors/css/cryptocoins/cryptocoins.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assetss/css/pages/timeline.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assetss/css/pages/dashboard-ico.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">


    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-light navbar-bg-color" style="background-color: rgba(255, 255, 255, 0.0);">
        <div class="navbar-container">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"> </i></a></li>
                    <!-- <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                <div class="search-input">
                  <input class="input" type="text" placeholder="Search Data">
                </div>
              </li> -->
                </ul>
                <!-- </div>-->
            </div>
        </div>
    </nav>

    <!-- fixed-Samping-->

    <div class="main-menu menu-fixed menu-dark menu-bg-default rounded menu-accordion menu-shadow">
        <div class="main-menu-content"><a class="navigation-brand d-none d-md-block d-lg-block d-xl-block" href="/"><img class="brand-logo" alt="CryptoDash admin logo" src="../../../app-assetss/images/logo/logo.png" /></a>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" nav-item"><a href="<?php echo url('/'); ?>">
                        <i class="menu-icon fa fa-tachometer"></i><span class="menu-title" data-i18n="">Beranda</span></a>
                </li>

                <li class=" nav-item"><a href="#">
                        <i class="menu-icon fa fa-gavel"></i><span class="menu-title" data-i18n="">Pemerintahan</span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="<?php echo url('/lkpphukum'); ?>">Produk Hukum LKPP JDIH</a></li>
                        <li><a class="menu-item" href="<?php echo url('/putusan_mahkamah_agung'); ?>">Putusan Mahkamah
                                Agung</a></li>
                        <li><a class="menu-item" href="<?php echo url('/sentiment_analysis_mahkamah_agung'); ?>">Sentiment Analysis
                                MA</a></li>
                        <li><a class="menu-item" href="<?php echo url('/putusan_mahkamah_konstitusi'); ?>">Putusan
                                Mahkamah
                                Konstitusi</a></li>
                        <li><a class="menu-item" href="<?php echo url('/sentiment_analysis_lkpp_ri'); ?>">Sentiment
                                Analysis LKPP RI</a>
                        </li>
                        <li><a class="menu-item" href="<?php echo url('/analisis_youtube_bappenas'); ?>">Analisis
                                Youtube Bappenas</a>
                        </li>
                        <li><a class="menu-item" href="<?php echo url('/sentiment_analysis_bkn'); ?>">Sentiment Analysis
                                BKN</a></li>
                    </ul>
                </li>

                <!-- <li class=" nav-item"><a href="#">
                        <i class="menu-icon fa fa-video-camera"></i><span class="menu-title"
                            data-i18n="">CCTV</span></a>
                    <ul class="menu-content">

                    </ul>
                </li> -->

                <li class=" nav-item"><a href="#">
                        <i class="menu-icon fa fa-building"></i><span class="menu-title" data-i18n="">Politik</span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="<?php echo url('/politik'); ?>">Analysis Pemilu 2024</a>
                        <li><a class="menu-item" href="<?php echo url('/politik'); ?>">Analysis Tweet Calon Presiden</a>
                        <li><a class="menu-item" href="<?php echo url('/politik'); ?>">Sentiment Analysis Partai
                                Gerindra</a>

                    </ul>
                </li>

                <li class=" nav-item"><a href="#">
                        <i class="menu-icon fa fa-thumbs-up"></i><span class="menu-title" data-i18n="">Pelayanan</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="<?php echo url('/analisis_penumpang_airlines'); ?>">Analisis
                                Penumpang Airlines</a>
                        </li>

                    </ul>
                </li>

                <li class=" nav-item"><a href="#">
                        <i class="menu-icon fa fa-leaf"></i><span class="menu-title" data-i18n="">Kehutanan</span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="<?php echo url('/perhutaniproduct'); ?>">Produksi Kayu Bulat</a>
                        </li>
                        <li><a class="menu-item" href="<?php echo url('/penjualankayu'); ?>">Penjualan Produk Hutan
                                Kayu</a>
                        </li>
                        <li><a class="menu-item" href="<?php echo url('/manggrove'); ?>">Analisis Hutan Mangrove
                                Jabar</a></li>

                    </ul>
                </li>

                <li class=" nav-item"><a href="#">
                        <i class="menu-icon fa fa-truck"></i><span class="menu-title" data-i18n="">Pertambangan</span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="<?php echo url('/produksi_aluminium_di_dunia'); ?>">Produksi
                                Aluminium di Dunia</a>
                        </li>
                        <li><a class="menu-item" href="<?php echo url('/politik'); ?>">Produksi vs Konsumsi Energi</a>
                        </li>

                    </ul>
                </li>

                <!-- <li class=" nav-item"><a href="#">
                        <i class="menu-icon fa fa-subway"></i><span class="menu-title" data-i18n="">Transportasi</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="<?php echo url('/h_plus_t_analysis'); ?>">H + T Analisis</a>
                        </li>
                    </ul>
                </li> -->

                <li class=" nav-item"><a href="#">
                        <i class="menu-icon fa fa-id-card-o"></i><span class="menu-title" data-i18n="">Kependudukan</span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="<?php echo url('/h_plus_t_analysis'); ?>">H + T Analysis</a></li>
                        <li><a class="menu-item" href="<?php echo url('/politik'); ?>">Analisis Penyebab Kematian</a>
                        </li>

                    </ul>
                </li>

                <li class=" nav-item"><a href="#">
                        <i class="menu-icon fa fa-black-tie"></i><span class="menu-title" data-i18n="">Kepegawaian</span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="<?php echo url('/politik'); ?>">Analisis Pekerja di Jakarta</a>
                        </li>
                        <li><a class="menu-item" href="<?php echo url('/politik'); ?>">Analisis Kepegawaian</a></li>

                    </ul>
                </li>

                <li class=" nav-item"><a href="#">
                        <i class="menu-icon fa fa-briefcase"></i><span class="menu-title" data-i18n="">Finance</span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="<?php echo url('/politik'); ?>">Supermarket Sales</a>

                    </ul>
                </li>

            </ul>
            </li>
            </ul>
        </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
            </div>

            <!-- ////////////////////////////////////////////////////////////////////////////-->




            <!-- ////////////////////////////////////////////////////////////////////////////-->
            <!-- footer-->
            @yield('body')

            <footer class="footer footer-static footer-transparent">
                <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; <script>
                            document.write(new Date().getFullYear())
                        </script> <a class="text-bold-800 grey darken-2">FORTECH </a> </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Dasboard Fortech Analytic
                    </span></p>
            </footer>

            <!-- BEGIN VENDOR JS-->
            <script src="../../../app-assetss/vendors/js/vendors.min.js" type="text/javascript"></script>
            <!-- BEGIN VENDOR JS-->
            <!-- BEGIN PAGE VENDOR JS-->
            <script src="../../../app-assetss/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
            <script src="../../../app-assetss/vendors/js/charts/chartist-plugin-tooltip.min.js" type="text/javascript">
            </script>
            <script src="../../../app-assetss/vendors/js/timeline/horizontal-timeline.js" type="text/javascript">
            </script>
            <!-- END PAGE VENDOR JS-->
            <!-- BEGIN MODERN JS-->
            <script src="../../../app-assetss/js/core/app-menu.js" type="text/javascript"></script>
            <script src="../../../app-assetss/js/core/app.js" type="text/javascript"></script>
            <!-- END MODERN JS-->
            <!-- BEGIN PAGE LEVEL JS-->
            <script src="../../../app-assetss/js/scripts/pages/dashboard-ico.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL JS-->

</body>

</html>