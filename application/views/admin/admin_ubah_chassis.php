<?php $this->load->view('template/_headAdmin'); ?>
<link rel="stylesheet" href="<?php echo site_url('assets/admin/vendor/datatables/dataTables.bootstrap4.css'); ?>">
<link rel="stylesheet" href="<?php echo site_url('assets/admin/vendor/datatables/buttons-bs4/buttons.bootstrap4.min.css'); ?>">
<?php $this->load->view('template/_sidebarAdmin'); ?>
<?php $this->load->view('template/_headerAdmin'); ?>
<main id="main-container">

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center border-bottom border-primary">
                <h1 class="flex-sm-fill h3 my-2">
                    Update Chassis <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"></small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <!-- <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">Generic</li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a class="link-fx" href="">Generic</a>
                                    </li>
                                </ol> -->   
                </nav>
            </div>            
        </div>
    </div>
    <!-- END Hero -->
    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="row">
            <div class="col-xl">
                <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Chassis</h3>
                            <div class="block-options">
                                <a class="btn btn-warning" href="<?php echo site_url('admin_c/asset'); ?>">
                                    <i class="fa fa-fw fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                            <?php foreach ($chassis as $key) { ?>
                            <form action="<?php echo site_url('admin_c/update_chassis/'.$key->assets_id_chassis); ?>" method="post" enctype="multipart/form-data">
                                <div class="block-content font-size-sm">
                                    <div class="form-group">
                                        <label>Assets ID chassis train</label>
                                        <input type="text" class="form-control" id="example-text-input" name="assets_id_chassis" placeholder="Train name" value="<?php echo $key->assets_id_chassis; ?>" readonly>

                                    </div>
                                    <div class="form-group">
                                        <label>Code train</label>
                                        <input type="text" class="form-control" id="example-text-input" name="code_train" placeholder="Train name" value="<?php echo $key->code_train; ?>">

                                    </div>
                                    <div class="form-group">
                                        <label>Code carriage</label>
                                        <input type="text" class="form-control" id="example-text-input" name="code_carriage" placeholder="Origin" value="<?php echo $key->code_carriage; ?>"">

                                    </div>
                                </div>
                                <div class="block-content block-content-full text-right border-top">
                                    <a href="<?php echo site_url('admin_c/asset'); ?>" class="btn btn-sm btn-light" data-dismiss="modal">Cancel</a>
                                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check mr-1"></i>Save</button>
                                </div>
                        </form>
                        <?php } ?>

                </div>
            </div>
        </div>

        <!-- END Your Block -->
    </div>
    <br>
    <!-- END Page Content -->



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
    <?php } ?>

     <!-- Page JS Plugins -->
        

</main>



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