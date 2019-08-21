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
                                Server Logger IOT And Command
                            </h1>

                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">Admin</li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a class="link-fx" href="">Server Logger IOT And Command)</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <button type="button" class="btn-primary" data-toggle="modal" data-target="#add_chassis">
                         ADD Chasiss
                    </button><hr>
                    <!-- Your Block -->
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">
                                Server Logger IOT And Command
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
                                        <td>Assets Management ID Chassis Online</td>
                                        <td>Kode Kereta</td>
                                        <td>Kode Gerbong</td>
                                        <td>Tanggal</td>
                                        <td>Jam</td>
                                        <td>GPS</td>
                                        <td>Nama Kereta</td>
                                        <td>Hours Online</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; foreach ($chassis as $value) { $i++; ?>
                                    <tr>
                                        <td class="text-center font-size-sm"><?php echo $i; ?></td>
                                        <td>
                                            <?php echo $value->assets_id_chassis; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->code_train; ?>                                     
                                        </td>
                                        <td>
                                            <?php echo $value->code_carriage; ?>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>                                            
                                            
                                        </td>
                                        <td>
                                            <?php echo getContent($value->assets_id_chassis)->train_name ?>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td align="center">
                                            <div class="btn-group btn-group-sm" role="group" aria-label="...">                                                
                                                <a href="<?php echo site_url('admin_c/halaman_chassis/'.$value->assets_id_chassis); ?>" class="btn btn-primary">Chassis</a>
                                                <a href="<?php echo site_url('admin_c/halaman_content/'.$value->assets_id_chassis); ?>" class="btn btn-info">Content</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
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
                        <form action="<?php echo site_url('admin_c/add_chassis'); ?>" method="post" enctype="multipart/form-data">
                            <div class="block-content font-size-sm">
                                <div class="form-group">
                                    <label>Assets id chassis</label>
                                    <input type="text" class="form-control" id="example-text-input" name="assets_id_chassis" placeholder="Assets id chassis" >
                                </div>                                
                                <div class="form-group">
                                    <label>Kode Kereta</label>
                                    <input type="text" class="form-control" id="example-text-input" name="code_train" placeholder="Kode Kereta" >
                                </div>
                                <div class="form-group">
                                    <label>Kode Gerbong</label>
                                    <input type="text" class="form-control" id="example-text-input" name="code_carriage" placeholder="Kode Gerbong" >
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