<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Pharmacy - Warehouse Transfer</title>
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
    label {
        font-weight: bold;
        font-size: 12px !important;
    }

    /* scroll bar y-axix in table css */
    .my-custom-scrollbar {
        position: relative;
        height: 222px;
        width: 100%;
        overflow: auto;
    }

    .table-wrapper-scroll-y {
        display: block;
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Transaction Module</a>
                                    </li>
                                    <li class="breadcrumb-item active">Warehouse Transfer</li>
                                </ol>
                                <!--end breadcrumb-->
                            </div>
                            <!--end /div-->
                            <h4 class="page-title">Warehouse Transfer</h4>
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
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-sm-1 col-form-label">Warehouse 1</label>
                                            <div class="col-sm-2"><select class="form-control" id="warehouse1">
                                                    <option>Main Shop</option>
                                                </select>
                                            </div>

                                            <label class="col-sm-1 col-form-label">Warehouse 2</label>
                                            <div class="col-sm-2"><select class="form-control" id="warehouse2">
                                                    <option>Main Shop</option>
                                                </select>
                                            </div>

                                            <label class="col-sm-1 col-form-label">Item Name</label>
                                            <div class="col-sm-2"><select class="form-control" id="warehouse2">
                                                    <option>Panadol</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-3">
                                                <button type="submit" class="btn btn-primary px-5 py-2 mr-2"><i
                                                        class="fas fa-save"></i>&emsp;Save</button>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row" style="border: 3px solid #1c1c1c; height: 230px;">
                                            <div class="col-sm-6 table-wrapper-scroll-y my-custom-scrollbar">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Item Id</th>
                                                            <th scope="col">Item Name</th>
                                                            <th scope="col">Expiry Date</th>
                                                            <th scope="col">Barcode</th>
                                                            <th scope="col">BatchNo</th>
                                                            <th scope="col">Rate</th>
                                                            <th scope="col">Available Quantity</th>
                                                            <th scope="col">Transfer Quantity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="overflow-auto">
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>SBX</td>
                                                            <td>12.53</td>
                                                            <td>20</td>
                                                            <td>03-10-19</td>
                                                            <td>1</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-sm-6 table-wrapper-scroll-y my-custom-scrollbar">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Item Id</th>
                                                            <th scope="col">Item Name</th>
                                                            <th scope="col">Expiry Date</th>
                                                            <th scope="col">Barcode</th>
                                                            <th scope="col">BatchNo</th>
                                                            <th scope="col">Rate</th>
                                                            <th scope="col">Quantity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="overflow-auto">
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>SBX</td>
                                                            <td>12.53</td>
                                                            <td>20</td>
                                                            <td>03-10-19</td>
                                                            <td>1</td>
                                                            <td>0</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>

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
            <div class="boxed-footer">&copy; 2020 Pharmacy <span
                    class="text-muted d-none d-sm-inline-block float-right">Powered by <a href="https://matz.group/"
                        target="_blank">Matz Solutions Pvt Ltd</a></span></div>
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