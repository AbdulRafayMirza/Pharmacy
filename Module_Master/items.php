<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Metrica - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                    <li class="breadcrumb-item active">Items</li>
                                </ol>
                                <!--end breadcrumb-->
                            </div>
                            <!--end /div-->
                            <h4 class="page-title">Items</h4>
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
                                    <div class="col-lg-4">
                                        <div class="form-group row"><label for="text-input-item-id" class="col-sm-4 col-form-label text-right">Item ID</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-item-id" readonly></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-item-batch-number" class="col-sm-4 col-form-label text-right">Batch Number</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-item-batch-number"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-item-name" class="col-sm-4 col-form-label text-right">Item Name</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-item-name"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-item-short-name" class="col-sm-4 col-form-label text-right">Short Name</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-item-short-name"></div>
                                        </div>
                                        <div class="form-group row"><label for="select-item-packing-type" class="col-sm-4 col-form-label text-right">Packing Type</label>
                                            <div class="col-sm-8"><select class="form-control" type="text" id="select-item-packing-type"><option>Strip</option></select></div>
                                        </div>
                                        <div class="form-group row"><label for="select-item-category" class="col-sm-4 col-form-label text-right">Category</label>
                                            <div class="col-sm-8"><select class="form-control" type="text" id="select-item-category"><option></option></select></div>
                                        </div>
                                        <div class="form-group row"><label for="select-item-company" class="col-sm-4 col-form-label text-right">Company</label>
                                            <div class="col-sm-8"><select class="form-control" type="text" id="select-item-company"><option>Abbott</option></select></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group row"><label for="text-input-item-gst-percent" class="col-sm-4 col-form-label text-right">GST (%)</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-item-gst-percent"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-item-selling-price" class="col-sm-4 col-form-label text-right">Selling Price</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-item-selling-price"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-alarm-quantity" class="col-sm-4 col-form-label text-right">Alarm Quantity</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-alarm-quantity"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-item-units-in-pack" class="col-sm-4 col-form-label text-right">Units in Pack</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-item-units-in-pack"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-item-barcode" class="col-sm-4 col-form-label text-right">Barcode</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-item-barcode"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group row"><label for="text-input-item-gst-percent" class="col-sm-4 col-form-label text-right">Trade Price</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-item-gst-percent"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-item-selling-price" class="col-sm-4 col-form-label text-right">Selling %</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-item-selling-price"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-alarm-quantity" class="col-sm-4 col-form-label text-right">Packs in Carton</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-alarm-quantity"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-item-units-in-pack" class="col-sm-4 col-form-label text-right">RFID Tag</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-item-units-in-pack"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-item-barcode" class="col-sm-4 col-form-label text-right">HSN</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-item-barcode"></div>
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
                                    <div class="col-lg-12 table-responsive">

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 155.889px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Item ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 240.889px;" aria-label="Position: activate to sort column ascending">Batch Number</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 113.889px;" aria-label="Office: activate to sort column ascending">Item Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Short Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Company</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Packing Type</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Category</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Trade Price</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Retail Price</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Alarm Quantity</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Unit in Pack</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Packs in Carton</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Barcode Number</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">RFID Tag</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Selling Percent</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">GST Rate</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">HSN</th>
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