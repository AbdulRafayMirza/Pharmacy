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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Accounting Module</a></li>
                                    <li class="breadcrumb-item active">Cash Entry</li>
                                </ol>
                                <!--end breadcrumb-->
                            </div>
                            <!--end /div-->
                            <h4 class="page-title">Cash Entry</h4>
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
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-right">Trans No</label>
                                            <div class="col-sm-10"><input class="form-control" type="text" id="cash_transactionNo" value="1" readonly>
                                            </div>
                                        </div>                        
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-right">Trans Date</label>
                                            <div class="col-sm-10"><input class="form-control" type="date" id="cash_transactiondate"></div>
                                        </div>                                        
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-right">Trans Type</label>
                                            <div class="col-sm-10"><select class="form-control" id="cash_transtype">
                                                    <option>Cash Entry</option>
                                                </select>
                                            </div>
                                        </div>                        
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-right">Currency</label>
                                            <div class="col-sm-10"><select class="form-control" id="cash_currency">
                                                    <option>PKR</option>
                                                </select>
                                            </div>
                                        </div>                                        
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-right">Customer</label>
                                            <div class="col-sm-10"><select class="form-control" id="cash_customer" disabled>
                                                    <option>Waseem</option>
                                                </select>
                                            </div>
                                        </div>                        
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-right">Vendor</label>
                                            <div class="col-sm-10"><select class="form-control" id="cash_vendor" disabled>
                                                    <option>Jai Medicos</option>
                                                </select>
                                            </div>
                                        </div>                                        
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-right">Cash In</label>
                                            <div class="col-sm-10"><input class="form-control" type="text" id="cash_cashin"></div>
                                        </div>                        
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-right">Cash Out</label>
                                            <div class="col-sm-10"><input class="form-control" type="text" id="cash_cashout"></div>
                                        </div>                                        
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-sm-1 col-form-label text-right">Naration</label>
                                            <div class="col-sm-11"><input class="form-control" type="text" id="cash_narration"></div>
                                        </div> 
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary px-5 py-2 mr-2"><i
                                            class="fas fa-save"></i>&emsp;Save</button>
                                        <button type="submit" class="btn btn-primary px-5 py-2 mr-2"><i
                                            class="fa fa-times"></i>&emsp;Exit</button> 
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
    <!-- App js -->
    <script src="../assets/js/app.js"></script>
</body>

</html>