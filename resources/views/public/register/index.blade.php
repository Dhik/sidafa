<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Register Bang Tendi</title>
    <link rel="apple-touch-icon" href="{{url('images/kemendagri.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('images/kemendagri.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

   <!-- BEGIN: Vendor CSS-->
   <link rel="stylesheet" type="text/css" href="{{url('/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/vendors/css/extensions/dragula.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/themes/semi-dark-layout.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/pages/widgets.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/pages/dashboard-analytics.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu navbar-static 1-column   footer-static bg-full-screen-image  blank-page" data-open="hover" data-menu="horizontal-menu" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            
            <div class="content-body">
                
                <!-- login page start -->
                <section id="auth-login" class="row flexbox-container">
                    <div class="col-xl-8 col-11">
                        <div class="card bg-authentication mb-0">
                            <div class="row m-0">
                                <!-- left section-login -->
                                <div class="col-sm-12">
        @if(!empty(\Session::get('success')) > 0)
                    <div class="alert alert-success">     
                        <strong>Sukses!</strong> {!! \Session::get('success') !!}             
                        </div>
                    @endif
                    <!-- /.card-header -->
              @if(count($errors) > 0)
              <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                {{ $error }} <br/>
                @endforeach
              </div>
              @endif
                <script>
                    window.setTimeout(function() {
                    $.noConflict();
                    $(".alert").fadeTo(500, 0).slideUp(500, function(){
                        $(this).remove(); 
                    });
                    }, 5000);
                </script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
                </div>
                                <div class="col-md-6 col-12 px-0">     
                                    <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                        <div class="card-header pb-1">
                                            <div class="card-title">                                         
                                                <h4 class="text-center mb-2">Register Akun BangTendi</h4>
                                            </div>
                                        </div>
                                                                   
                                        <div class="card-body">
                                        <form class="form" action="<?php echo url("/register_new"); ?>" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}

                        <div class="mb-3">
                            <label for="nip" class="col-md-4 col-form-label text-md-end">NIP</label>
                                <input id="nip" type="text" class="form-control" name="nip" required>
                                
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nama</label>
                                <input id="name" type="text" class="form-control" name="name" required>
                            
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                                <input id="email" type="text" class="form-control" name="email" required>

                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                                <input id="password" type="password" class="form-control" name="password"  required>

                            <label for="jabatan" class="col-md-4 col-form-label text-md-end">Jabatan</label>

                                <input id="jabatan" type="string" class="form-control" name="jabatan" required>

                            <label for="pangkat" class="col-md-4 col-form-label text-md-end">Pangkat</label>

                                <input id="pangkat" type="string" class="form-control" name="pangkat" required>

                            <label for="pemda" class="col-md-4 col-form-label text-md-end">Pemda</label>

                                <input id="pemda" type="string" class="form-control" name='pemda' required>
                              
                                <label for="Instansi" class="col-md-4 col-form-label text-md-end">Instansi</label>

                                <input id="instansi" type="string" class="form-control" name='instansi' required>

                                <label for="pemda" class="col-md-4 col-form-label text-md-end">Surat Tugas</label>

                            <input id="file" type="file" class="form-control" name="file" required>

                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Daftar
                                </button>
                                
                            </div>
                        </div>
                    </form>
                                            <hr>
                                          </div>
                                    </div>
                                </div>
                                <!-- right section image -->
                                <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                                    <img class="img-fluid" src="{{url('/app-assets/images/pages/login.png')}}" alt="branding logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- login page ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/scripts/configs/horizontal-menu.js"></script>
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <script src="../../../app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>