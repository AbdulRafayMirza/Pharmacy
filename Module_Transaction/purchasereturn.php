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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Transaction Module</a>
                                    </li>
                                    <li class="breadcrumb-item active">Purchase Return</li>
                                </ol>
                                <!--end breadcrumb-->
                            </div>
                            <!--end /div-->
                            <h4 class="page-title">Purchase Return</h4>
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
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Return No :</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="return_no"
                                                    readonly></div>
                                        </div>
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Vendor :</label>
                                            <div class="col-sm-8"><select class="form-control" type="text" id="vendor">
                                                    <option>Jai Medicos</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Return Date :</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="date" id="return_date">
                                            </div>
                                        </div>
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Remarks :</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="remarks">
                                            </div>
                                        </div>
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Currency :</label>
                                            <div class="col-sm-8"><select class="form-control" type="text"
                                                    id="currency">
                                                    <option>PKR</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-8 pt-3" style="border: 3px solid #1c1c1c; height: 270px;">
                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Item
                                                Name :</label>
                                            <div class="col-sm-10"><select class="form-control" type="text"
                                                    id="itemname">
                                                    <option>Acylex 200mg</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">First</th>
                                                        <th scope="col">Last</th>
                                                        <th scope="col">Handle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary px-5 py-2"><i
                                                class="fas fa-file"></i>&emsp;New</button>
                                        <button type="submit" class="btn btn-primary px-5 py-2 mr-2"><i
                                                class="fas fa-save"></i>&emsp;Add</button>
                                        <button type="submit" disabled class="btn btn-primary px-5 py-2 mr-2"><i
                                                class="fas fa-trash"></i>&emsp;Delete</button>
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

                                        <table id="datatable"
                                            class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline"
                                            style="border-collapse: collapse; border-spacing: 0px; width: 100%;"
                                            role="grid" aria-describedby="datatable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 155.889px;"
                                                        aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">RFID Tag
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 240.889px;"
                                                        aria-label="Position: activate to sort column ascending">Barcode
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 113.889px;"
                                                        aria-label="Office: activate to sort column ascending">Item ID
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 51.8889px;"
                                                        aria-label="Age: activate to sort column ascending">Item Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 51.8889px;"
                                                        aria-label="Age: activate to sort column ascending">Batch Number
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 51.8889px;"
                                                        aria-label="Age: activate to sort column ascending">Rate</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 51.8889px;"
                                                        aria-label="Age: activate to sort column ascending">Expiry Date
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 51.8889px;"
                                                        aria-label="Age: activate to sort column ascending">Bonus</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 51.8889px;"
                                                        aria-label="Age: activate to sort column ascending">Quantity
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 51.8889px;"
                                                        aria-label="Age: activate to sort column ascending">Discount(%)
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 51.8889px;"
                                                        aria-label="Age: activate to sort column ascending">Total Amount
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 51.8889px;"
                                                        aria-label="Age: activate to sort column ascending">GST Rate
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 51.8889px;"
                                                        aria-label="Age: activate to sort column ascending">GST Amount
                                                    </th>
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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <b>Payment</b>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Total Amount</label>
                                            <div class="col-sm-8"><input class="form-control" type="text"
                                                    id="p_totalamount" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">
                                                <input type="checkbox" id="p_checkbox"> Discount %</label>
                                            <div class="col-sm-8"><input class="form-control" type="text"
                                                    id="p_discount" value="0" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Expense Percentage</label>
                                            <div class="col-sm-8"><input class="form-control" type="text"
                                                    id="expensepercentage" value="0">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Total with Discount</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="total_withdiscount">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Paid Amount</label>
                                            <div class="col-sm-8"><input class="form-control" type="text"
                                                    id="paidamount" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Remaining Amount</label>
                                            <div class="col-sm-8"><input class="form-control" type="text"
                                                    id="remainingamount" value="0" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4" style="border: 3px solid #1c1c1c;">
                                        <div class="form-group row"><label
                                                class="col-sm-3 col-form-label text-right mt-4">Remarks</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" id="remarks">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 text-center">
                                                <button type="submit" disabled class="btn btn-primary px-5 py-2 mr-2"><i
                                                        class="fas fa-trash"></i>&emsp;Save</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
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