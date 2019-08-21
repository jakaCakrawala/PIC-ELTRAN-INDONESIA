<?php $this->load->view('template/_headAdmin'); ?>
<link rel="stylesheet" href="<?php echo site_url('assets/admin/vendor/datatables/dataTables.bootstrap4.css'); ?>">
<link rel="stylesheet" href="<?php echo site_url('assets/admin/vendor/datatables/buttons-bs4/buttons.bootstrap4.min.css'); ?>">
<?php $this->load->view('template/_sidebarAdmin'); ?>
<?php $this->load->view('template/_headerAdmin'); ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
<main id="main-container">

                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill h3 my-2">
                                View gerbong Location
                            </h1>

                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">Content</li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a class="link-fx" href="">View gerbong Locationr</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
<!--                     <button type="button" class="btn-primary" data-toggle="modal" data-target="#add_chassis">
                         Add ID Manual
                    </button><hr> -->
                    <!-- Your Block -->
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">
                               View gerbong Location
                            </h3>

                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-settings"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">

                            <div id="mapid" class="wow fadeIn" style="height: 400px; z-index: 1;"></div>

                            <script type="text/javascript">
                        var map = L.map('mapid').setView([-6.949652, 107.6174782], 13);
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);

                        L.marker([-6.949652, 107.6174782]).addTo(map)
                            .bindPopup('PT.ELTRAN INDONESIA')
                            .openPopup();
                    </script>
                           
                        </div>
                    </div>
                    <!-- END Your Block -->
                </div>
                <!-- END Page Content -->

                <!-- Pop Out Block Modal -->
        <div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Ubah Kode Kereta & gerbong</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content font-size-sm">
                             <div class="form-group">
                                    <label for="example-text-input">Kode Kereta & gerbong</label>
                                    <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input" value="K2-01">
                             </div>
                             
                        </div>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal"><i class="fa fa-check mr-1"></i>Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Pop Out Block Modal -->

        <!-- Slide Right Block Modal -->
        <div class="modal fade" id="add_chassis" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideright" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideright modal-lg" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Add Direction</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="block-content font-size-sm">
                                <div class="form-group">
                                    <label>ID Gerbong</label>
                                    <input type="text" class="form-control" id="example-text-input" name="assets_id_chassis" placeholder="Assets id chassis" >
                                </div> 
                            </div>
                            <div class="block-content block-content-full text-right border-top">
                                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check mr-1"></i>Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


</main>


    <?php if ($this->session->flashdata('berhasil_s')) { ?>

        <script>
            Swal.fire({
                position: 'top-end',
                type: 'success',
                title: 'Data has been saved',
                showConfirmButton: false,
                timer: 1500
            });
        </script>

    <?php } elseif ($this->session->flashdata('none_s')) { ?>

        <script>
            Swal.fire({
                position: 'top-end',
                type: 'info',
                title: 'Data not changes',
                showConfirmButton: false,
                timer: 1500
            });
        </script>

    <?php } elseif ($this->session->flashdata('error_s')) { ?>

        <script>
            Swal.fire({
                position: 'top-end',
                type: 'error',
                title: 'Sorry Data Error',
                showConfirmButton: false,
                timer: 1500
            });
        </script>

    <?php } elseif ($this->session->flashdata('peringatan_s')) { ?>
        <script>
            Swal.fire({
                position: 'top-end',
                type: 'error',
                title: 'Sorry Error Not Detected',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php } elseif ($this->session->flashdata('fail_upload_s')) { ?>
        <script>
            Swal.fire({
                position: 'top-end',
                type: 'error',
                title: 'Sorry Fail Upload Photos',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php } elseif ($this->session->flashdata('delete_file_s')) { ?>
        <script>
            Swal.fire({
                position: 'top-end',
                type: 'success',
                title: 'Data has Been Deleted',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php } ?>


<?php $this->load->view('template/_footerAdmin'); ?>
<script src="<?php echo site_url('assets/admin/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/admin/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/admin/vendor/datatables/buttons/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/admin/vendor/datatables/buttons/buttons.print.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/admin/vendor/datatables/buttons/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/admin/vendor/datatables/buttons/buttons.flash.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/admin/vendor/datatables/buttons/buttons.colVis.min.js'); ?>"></script>

<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>