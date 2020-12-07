<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Pharmacy - Update Expiry Date</title>
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
                                    <li class="breadcrumb-item active">Update Expiry Date</li>
                                </ol>
                                <!--end breadcrumb-->
                            </div>
                            <!--end /div-->
                            <h4 class="page-title">Update Expiry Date</h4>
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
                                            <label class="col-sm-2 col-form-label">Adjustment ID</label>
                                            <div class="col-sm-3">
                                                <input class="form-control" type="text" id="itemid" value="1" readonly>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Item Name:</label>
                                            <div class="col-sm-6"><select class="form-control" type="text"
                                                    id="itemname">
                                                    <option>Acylex 200mg</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row" style="border: 3px solid #1c1c1c; height: 230px;">
                                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                <table class="table table-bordered table-striped">
                                                <thead>
                                                        <tr>
                                                            <th scope="col">Item Id</th>
                                                            <th scope="col">Batch No</th>
                                                            <th scope="col">Rate</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Expiry Date</th>
                                                            <th scope="col">Warehouse Id</th>
                                                            <th scope="col">Barcode</th>
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
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <fieldset>
                                            <legend>
                                                Item Information
                                            </legend>

                                            <div class="form-group row">
                                                <label class="col-sm-1 col-form-label">ItemID</label>
                                                <div class="col-sm-2">
                                                    <input class="form-control" type="text" id="itemid" value="1" disabled>
                                                </div>

                                                <label class="col-sm-1 col-form-label">BatchNo</label>
                                                <div class="col-sm-2">
                                                    <input class="form-control" type="text" id="batchno" disabled>
                                                </div>

                                                <label class="col-sm-1 col-form-label">Rate</label>
                                                <div class="col-sm-2">
                                                    <input class="form-control" type="text" id="rate" disabled>
                                                </div>

                                                <label class="col-sm-1 col-form-label">Quantity</label>
                                                <div class="col-sm-2">
                                                    <input class="form-control" type="number" id="quantity" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-1 col-form-label">Barcode</label>
                                                <div class="col-sm-2">
                                                    <input class="form-control" type="text" id="barcode" disabled>
                                                </div>

                                                <label class="col-sm-1 col-form-label">Old Exp Date</label>
                                                <div class="col-sm-2">
                                                    <input class="form-control" type="date" id="oldexpdate">
                                                </div>

                                                <label class="col-sm-1 col-form-label">New Exp Date</label>
                                                <div class="col-sm-2">
                                                    <input class="form-control" type="date" id="newexpdate">
                                                </div>

                                                <label class="col-sm-1 col-form-label">Warehouse ID</label>
                                                <div class="col-sm-2">
                                                    <input class="form-control" type="text" id="warehouseid" disabled>
                                                </div>
                                            </div>
                                            
                                        </fieldset>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary px-5 py-2 mr-2"><i
                                                class="fas fa-save"></i>&emsp;Save</button>
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