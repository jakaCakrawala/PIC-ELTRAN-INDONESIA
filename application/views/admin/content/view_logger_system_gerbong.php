<?php $this->load->view('template/_headAdmin'); ?>
<link rel="stylesheet" href="<?php echo site_url('assets/admin/vendor/datatables/dataTables.bootstrap4.css'); ?>">
<link rel="stylesheet" href="<?php echo site_url('assets/admin/vendor/datatables/buttons-bs4/buttons.bootstrap4.min.css'); ?>">
<?php $this->load->view('template/_sidebarAdmin'); ?>
<?php $this->load->view('template/_headerAdmin'); ?>
<main id="main-container">

                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill h3 my-2">
                                Logger System Gerbong
                            </h1>

                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">Content</li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a class="link-fx" href="">Logger System Gerbongr</a>
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
                               Logger System Gerbong
                            </h3>

                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-settings"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <table id="myTable" class="table table-bordered table-striped" style="width: 100%; font-size: 12px;">
                                <thead>
                                    <tr>
                                        <td class="text-center">NO</td>
                                        <td>ID Gerbong</td>                                        
                                        <td>Online</td>
                                        <td>Offline Kereta</td>
                                        <td>History Text In Command</td>
                                        <td>History who loggin</td>                                
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                </tbody>
                            </table>
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
<script src="https://cdn.rawgit.com/ashl1/datatables-rowsgroup/fbd569b8768155c7a9a62568e66a64115887d7d0/dataTables.rowsGroup.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable({
        'rowsGroup': [3,4]
    });
} );
</script>