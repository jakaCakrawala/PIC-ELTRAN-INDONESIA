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
                  
                  <!-- Dashboard Charts -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="block block-rounded block-mode-loading-oneui">
                                <div class="block-header">
                                    <h3 class="block-title">Earnings in $</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-settings"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content p-0 bg-body-light text-center">
                                    <!-- Chart.js is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js) -->
                                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                    <div class="pt-3" style="height: 360px;"><canvas class="js-chartjs-dashboard-earnings"></canvas></div>
                                </div>
                                <div class="block-content">
                                    <div class="row items-push text-center py-3">
                                        <div class="col-6 col-xl-3">
                                            <i class="fa fa-wallet fa-2x text-muted"></i>
                                            <div class="text-muted mt-3">$148,000</div>
                                        </div>
                                        <div class="col-6 col-xl-3">
                                            <i class="fa fa-angle-double-up fa-2x text-muted"></i>
                                            <div class="text-muted mt-3">+9% Earnings</div>
                                        </div>
                                        <div class="col-6 col-xl-3">
                                            <i class="fa fa-ticket-alt fa-2x text-muted"></i>
                                            <div class="text-muted mt-3">+20% Tickets</div>
                                        </div>
                                        <div class="col-6 col-xl-3">
                                            <i class="fa fa-users fa-2x text-muted"></i>
                                            <div class="text-muted mt-3">+46% Clients</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="block block-rounded block-mode-loading-oneui">
                                <div class="block-header">
                                    <h3 class="block-title">Sales</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-settings"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content p-0 bg-body-light text-center">
                                    <!-- Chart.js is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js) -->
                                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                    <div class="pt-3" style="height: 360px;"><canvas class="js-chartjs-dashboard-sales"></canvas></div>
                                </div>
                                <div class="block-content">
                                    <div class="row items-push text-center py-3">
                                        <div class="col-6 col-xl-3">
                                            <i class="fab fa-wordpress fa-2x text-muted"></i>
                                            <div class="text-muted mt-3">+20% Themes</div>
                                        </div>
                                        <div class="col-6 col-xl-3">
                                            <i class="fa fa-font fa-2x text-muted"></i>
                                            <div class="text-muted mt-3">+25% Fonts</div>
                                        </div>
                                        <div class="col-6 col-xl-3">
                                            <i class="fa fa-archive fa-2x text-muted"></i>
                                            <div class="text-muted mt-3">-10% Icons</div>
                                        </div>
                                        <div class="col-6 col-xl-3">
                                            <i class="fa fa-paint-brush fa-2x text-muted"></i>
                                            <div class="text-muted mt-3">+8% Graphics</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Dashboard Charts -->

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


</main>

<?php $this->load->view('template/_footerAdmin'); ?>
<script src="<?php echo site_url('assets/admin/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/admin/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/admin/vendor/datatables/buttons/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/admin/vendor/datatables/buttons/buttons.print.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/admin/vendor/datatables/buttons/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/admin/vendor/datatables/buttons/buttons.flash.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/admin/vendor/datatables/buttons/buttons.colVis.min.js'); ?>"></script>
<script src="assets/js/plugins/chart.js/Chart.bundle.min.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>