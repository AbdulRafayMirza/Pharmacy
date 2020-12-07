<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Pharmacy - Point Of Sales (POS)</title>
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
        height: 250px;
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
                                    <li class="breadcrumb-item active">Point Of Sales (POS)</li>
                                </ol>
                                <!--end breadcrumb-->
                            </div>
                            <!--end /div-->
                            <h4 class="page-title">Point Of Sales (POS)</h4>
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
                                                class="col-sm-4 col-form-label text-right">Invoice No :</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="invoice_no"
                                                    readonly></div>
                                        </div>
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Customer :</label>
                                            <div class="col-sm-8"><select class="form-control" type="text" id="vendor">
                                                    <option>Baba Saian</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Date :</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="date" id="date">
                                            </div>
                                        </div>
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Referred By :</label>
                                            <div class="col-sm-8"><select class="form-control" type="text" id="referredby">
                                                    <option>Baba Saian</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label text-right">
                                               <input type="checkbox" id="drpercentage_checkbox"> Doctor Percentage
                                            </label>
                                            <div class="col-sm-7">
                                                <input class="form-control" type="text" id="dr_percentage" value="0" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Barcode :</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="barcode"> 
                                            </div>
                                        </div>
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Item ID :</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="item_id" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Product name :</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="productname" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Seling Qty :</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="selingqty" value="1">
                                            </div>
                                        </div>
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Unit Price :</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="unitprice">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8">
                                                <button type="submit" disabled class="btn btn-primary px-4 py-2 mr-2"><i
                                                class="fas fa-window-close"></i>&emsp;Remove</button>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-5 pt-3" style="border: 3px solid #1c1c1c; height: 350px;">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">
                                            <input type="checkbox" name="check" id="check">
                                            Item Name :</label>
                                            <div class="col-sm-9"><select class="form-control" type="text"
                                                    id="itemname">
                                                    <option>Acylex 200mg</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Barcode</th>
                                                            <th scope="col">Item ID</th>
                                                            <th scope="col">Item Name</th>
                                                            <th scope="col">Rate</th>
                                                            <th scope="col">Qty</th>
                                                            <th scope="col">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="overflow-auto">
                                                        <tr>
                                                            <td>132</td>
                                                            <td>1</td>
                                                            <td>Acylex 200mg</td>
                                                            <td>2.00</td>
                                                            <td>200.00</td>
                                                            <td>400.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>132</td>
                                                            <td>1</td>
                                                            <td>Acylex 200mg</td>
                                                            <td>2.00</td>
                                                            <td>200.00</td>
                                                            <td>400.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>132</td>
                                                            <td>1</td>
                                                            <td>Acylex 200mg</td>
                                                            <td>2.00</td>
                                                            <td>200.00</td>
                                                            <td>400.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>132</td>
                                                            <td>1</td>
                                                            <td>Acylex 200mg</td>
                                                            <td>2.00</td>
                                                            <td>200.00</td>
                                                            <td>400.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>132</td>
                                                            <td>1</td>
                                                            <td>Acylex 200mg</td>
                                                            <td>2.00</td>
                                                            <td>200.00</td>
                                                            <td>400.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
                                <h4><u>Payment</u></h4>
                                <div class="row mt-3" style="border: 3px solid #1c1c1c;">
                                    <div class="col-md-4">
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Total Amount</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="p_totalamount"
                                                    value="0">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">
                                            <input type="checkbox" id="p_checkbox"> Discount %</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="p_discount"
                                                    value="0" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Expense Percentage</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="expensepercentage"
                                                    value="0">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Paid Amount</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="paidamount"
                                                    value="0">
                                            </div>
                                        </div>
                                        <div class="form-group row"><label
                                                class="col-sm-4 col-form-label text-right">Remaining Amount</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="remainingamount"
                                                    value="0" disabled>
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-label text-left mt-2">Remarks</label>
                                            <div class="col-sm-12">
                                                <div class="form-group"><textarea class="form-control" rows="5"
                                                        style="resize:none; border: 2px solid gray" id="address"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group row">
                                            <div class="col-sm-12 pt-5">
                                                <button type="submit" class="btn btn-primary px-4 py-2 mr-2"><i
                                                class="fas fa-save"></i>&emsp;Save</button>
                                            </div>
                                            <div class="col-sm-12 pt-2">
                                                <button type="submit" class="btn btn-primary px-4 py-2 mr-2"><i
                                                class="fas fa-print"></i>&emsp;Print</button>
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