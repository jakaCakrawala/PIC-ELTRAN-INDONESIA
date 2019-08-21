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
                <div class="hero-static d-flex align-items-center">
                    <div class="w-100">
                        <!-- Maintenance Section -->
                        <div class="content content-full bg-white">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4 py-6">
                                    <!-- Header -->
                                    <div class="text-center">
                                        <p>
                                            <i class="fa fa-3x fa-cog fa-spin text-primary"></i>
                                        </p>
                                        <h1 class="h4 mb-1">
                                            Under construction
                                        </h1>
                                        <h2 class="h6 font-w400 text-muted mb-3">
                                            ..but we’ll be back shortly!
                                        </h2>
                                    </div>
                                    <!-- END Header -->
                                </div>
                            </div>
                        </div>
                        <!-- END Maintenance Section -->

                        <!-- Footer -->
                      
                         <div class="font-size-sm text-center text-muted py-3">
                            <h6 style="color: black;"><strong>Created by IT Sekretariat Perusahaan</strong> &copy; <span data-toggle="year-copy"></span></h6>
                            
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
