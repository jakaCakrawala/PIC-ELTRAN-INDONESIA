<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Login</title>

   
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo site_url('assets/admin/media/favicons/favicon-192x192.png'); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('assets/admin/media/favicons/apple-touch-icon-180x180.png'); ?>">
   
        <link rel="stylesheet" href="<?php echo site_url('assets/admin/js/plugin/sweetalert2/sweetalert2.min.css'); ?>">
        <link rel="stylesheet" id="css-main" href="<?php echo site_url('assets/admin/css/oneui.min.css'); ?>">
        <script src="<?php echo site_url('assets/admin/js/plugin/sweetalert2/sweetalert2.all.min.js'); ?>"></script>
       
    </head>
    <body>

        <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="hero-static d-flex align-items-center" style="background-color:#3F4A59;">
                    <div class="w-100" >
                        <!-- Sign In Section -->
                        <div class="content content-full bg-white" style="
                        background-image: url('assets/bg.png');
                        background-size:750px 150px;
                        background-repeat: no-repeat;
                        background-position: left bottom;
                        ">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                                    <!-- Header -->
                                    <div class="text-center">

                                        <div class="row">
                                          <div class="col-md-6">
                                              <a href="<?php echo site_url('home'); ?>">
                                                <img src="<?php echo site_url('assets/images/kai.png') ?>" alt="" style="width: 70px;height: 70px;">
                                            </a>
                                          </div>
                                          <div class="col-md-6">
                                            <a href="<?php echo site_url('home'); ?>">
                                                <img src="<?php echo site_url('assets/images/eltran2.png') ?>" alt="" style="width: 70px;height: 70px;">
                                            </a>
                                          </div>
                                        </div>
                                      
                                        <h1 class="h4 mb-1">
                                            DIGITALISASI <br>
                                            GERBONG KERETA API
                                        </h1>
                                        <h2 class="h6 font-w400 text-muted mb-3">
                                            Please enter your username and password
                                        </h2>
                                    </div>
                                    <!-- END Header -->

                                    <form action="<?php echo site_url('login/user_login_process'); ?>" method="POST">
                                        <div class="py-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg form-control-alt" 
                                                name="username" placeholder="Username" required="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-lg form-control-alt" name="password" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="d-md-flex align-items-md-center justify-content-md-between">
                                                    
                                                    <div class="py-2">
                                                        <button type="button" class="btn btn-sm btn-primary push" data-toggle="modal" data-target="#modal-block-popout">Forgot Password?</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-center mb-0">
                                            <div class="col-md-6 col-xl-5">
                                                <button type="submit" class="btn btn-block btn-primary">
                                                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Log In
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Sign In Form -->
                                </div>
                            </div>
                        </div>
                        <!-- END Sign In Section -->


       <!-- Pop Out Block Modal -->
        <div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Forgot Password?</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content font-size-sm">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        </div>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Pop Out Block Modal -->

                        <!-- Footer -->
                        <div class="font-size-sm text-center text-muted py-3">
                            <h6 style="color: white;"><strong>Created by IT Sekretariat Perusahaan</strong> &copy; <span data-toggle="year-copy"></span></h6>
                            
                        </div>
                        <!-- END Footer -->
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <?php if ($this->session->flashdata('error_s')) { ?>

            <script>
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Username or password is not valid!',
                });
            </script>


        <?php }  ?>

        <script src="<?php echo site_url('assets/admin/js/oneui.core.min.js'); ?>"></script>

        <script src="<?php echo site_url('assets/admin/js/oneui.app.min.js'); ?>"></script>

        

    </body>
</html>
