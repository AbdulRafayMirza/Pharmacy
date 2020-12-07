<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Pharmacy - Vendor</title>
    
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="A premium admin dashboard template by Mannatthemes" name="description">
    <meta content="Mannatthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../assets/plugins/morris/morris.css">
    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="../assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="../assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <style>
    label{
        font-weight: bold;
    }
    </style>
</head>

<body class="container-fluid">

    <?php include_once 'header.php'; ?>

    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Master Module</a></li>
                                    <li class="breadcrumb-item active">Vendor</li>
                                </ol>
                                <!--end breadcrumb-->
                            </div>
                            <!--end /div-->
                            <h4 class="page-title">Vendor</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group row"><label for="text-input-vendor-id" class="col-sm-2 col-form-label text-right">Vendor ID</label>
                                            <div class="col-sm-10"><input class="form-control" type="text" id="text-input-vendor-id" readonly></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-vendor-name" class="col-sm-2 col-form-label text-right">Vendor Name</label>
                                            <div class="col-sm-10"><input class="form-control" type="text" id="text-input-vendor-name"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-vendor-responsible" class="col-sm-2 col-form-label text-right">Responsible</label>
                                            <div class="col-sm-10"><input class="form-control" type="text" id="text-input-vendor-responsible"></div>
                                        </div>
                                        <div class="form-group row"><label for="tel-input-phone"
                                                class="col-sm-2 col-form-label text-right">Phone</label>
                                            <div class="col-sm-10"><input class="form-control" type="tel"
                                                    id="tel-input-phone"></div>
                                        </div>
                                        <div class="form-group row"><label for="textarea-input-address" class="col-sm-2 col-form-label text-right">Address</label>
                                            <div class="col-sm-10">
                                                <div class="form-group"><textarea class="form-control" rows="5" style="resize:none" id="textarea-input-address"></textarea></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row"><label for="text-input-vendor-email" class="col-sm-2 col-form-label text-right">Email</label>
                                            <div class="col-sm-10"><input class="form-control" type="email" id="text-input-vendor-email"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-vendor-reg-no" class="col-sm-2 col-form-label text-right">Reg No</label>
                                            <div class="col-sm-10"><input class="form-control" type="text" id="text-input-vendor-reg-no"></div>
                                        </div>
                                        <div class="form-group row"><label for="select-vendor-type" class="col-sm-2 col-form-label text-right">Vendor Type<small>(For GST Only)</small></label>
                                            <div class="col-sm-10"><select class="form-control" type="text" id="select-vendor-type"><option>Local</option></select></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary px-5 py-2"><i class="fas fa-file"></i>&emsp;New</button>
                                        <button type="submit" class="btn btn-primary px-5 py-2 mr-2"><i class="fas fa-save"></i>&emsp;Save</button>
                                        <button type="submit" disabled class="btn btn-primary px-5 py-2 mr-2"><i class="fas fa-edit"></i>&emsp;Update</button>
                                        <button type="submit" disabled class="btn btn-primary px-5 py-2 mr-2"><i class="fas fa-trash"></i>&emsp;Delete</button>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 155.889px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Vendor Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 240.889px;" aria-label="Position: activate to sort column ascending">Phone</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 113.889px;" aria-label="Office: activate to sort column ascending">Email</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Address</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Contract Person</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Vendor Type</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Reg No</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
            </div>
            <!-- container -->
        </div>
        <!-- end page content -->
        <footer class="footer text-center text-sm-left">
            <div class="boxed-footer">&copy; 2020 Pharmacy <span class="text-muted d-none d-sm-inline-block float-right">Powered by <a href="https://matz.group/" target="_blank">Matz Solutions Pvt Ltd</a></span></div>
        </footer>
        <!--end footer-->
    </div>
    <!-- end page-wrapper -->
    <!-- jQuery  -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/waves.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <!--Plugins-->
    <script src="../assets/plugins/morris/morris.min.js"></script>
    <script src="../assets/plugins/raphael/raphael.min.js"></script>
    <script src="../assets/plugins/moment/moment.js"></script>
    <script src="../assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/pages/jquery.projects_dashboard.init.js"></script>
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="../assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables/jszip.min.js"></script>
    <script src="../assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="../assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="../assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="../assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="../assets/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="../assets/pages/jquery.datatable.init.js"></script>
    <!-- App js -->
    <script src="../assets/js/app.js"></script>
</body>

</html>