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
                                    <li class="breadcrumb-item active">Company</li>
                                </ol>
                                <!--end breadcrumb-->
                            </div>
                            <!--end /div-->
                            <h4 class="page-title">Company</h4>
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
                                            <label for="text-input-company-name"
                                                class="col-sm-2 col-form-label text-right">Company Name</label>
                                            <div class="col-sm-10"><input class="form-control" type="text"
                                                    id="text-input-company-name"></div>
                                        </div>
                                        <div class="form-group row"><label for="tel-input-phone"
                                                class="col-sm-2 col-form-label text-right">Phone</label>
                                            <div class="col-sm-10"><input class="form-control" type="tel"
                                                    id="tel-input-phone"></div>
                                        </div>
                                        <div class="form-group row"><label for="number-input-gstin"
                                                class="col-sm-2 col-form-label text-right">GSTIN</label>
                                            <div class="col-sm-10"><input class="form-control" type="number"
                                                    id="number-input-gstin"></div>
                                        </div>
                                        <div class="form-group row"><label for="textarea-input-address"
                                                class="col-sm-2 col-form-label text-right">Address</label>
                                            <div class="col-sm-10">
                                                <div class="form-group"><textarea class="form-control" rows="5"
                                                        style="resize:none" id="textarea-input-address"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row"><label for="text-input-company-owner"
                                                class="col-sm-2 col-form-label text-right">Company Owner</label>
                                            <div class="col-sm-10"><input class="form-control" type="text"
                                                    id="text-input-company-owner"></div>
                                        </div>
                                        <div class="form-group row"><label for="email-input-email"
                                                class="col-sm-2 col-form-label text-right">Email</label>
                                            <div class="col-sm-10"><input class="form-control" type="email"
                                                    id="email-input-email"></div>
                                        </div>
                                        <div class="form-group row"><label for="number-input-pan"
                                                class="col-sm-2 col-form-label text-right">PAN</label>
                                            <div class="col-sm-10"><input class="form-control" type="number"
                                                    id="number-input-pan"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-remarks"
                                                class="col-sm-2 col-form-label text-right">Remarks</label>
                                            <div class="col-sm-10"><input class="form-control" type="text"
                                                    id="text-input-remarks"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary px-5 py-2 mr-2">Save</button>
                                        <button type="submit" class="btn btn-primary px-5 py-2">Exit</button>
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