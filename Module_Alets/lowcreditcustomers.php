<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Pharmacy - Low Credit Customers</title>
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
    <!-- Responsive datatable examples -->
    <link href="../assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Alets Module</a></li>
                                    <li class="breadcrumb-item active">Low Credit Customers</li>
                                </ol>
                                <!--end breadcrumb-->
                            </div>
                            <!--end /div-->
                            <h4 class="page-title">Low Credit Customers</h4>
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
                                            <h2><b>List Of Low Credit Customers</b></h2>
                                        </div>                        
                                    </div>

                                    <div class="col-lg-12">
                                        <table id="mytable"
                                            class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline"
                                            style="border-collapse: collapse; border-spacing: 0px; width: 100%;"
                                            role="grid" aria-describedby="datatable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th style="width: 155.889px;">Customer Id</th>
                                                    <th style="width: 240.889px;">Customer Name</th>
                                                    <th style="width: 51.8889px;">Address</th>
                                                    <th style="width: 51.8889px;">Class</th>
                                                    <th style="width: 51.8889px;">Phone</th>
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
    <!-- Responsive DataTable examples -->
    <script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="../assets/pages/jquery.datatable.init.js"></script>
    <!-- App js -->
    <script src="../assets/js/app.js"></script>

    <!-- data table , generate excel file -->
    <script>
    $(document).ready(function() {
        $('#mytable').DataTable({

            responsive: true,
            dom: 'Bfrtip',
            buttons: {
                dom: {
                    button: {
                        className: 'btn btn-success '
                    }
                },
                buttons: [
                    {
                        extend: 'csv',
                        text: '<i class="fas fa-file-excel"></i> Print to Excel', //u can define a diferent text or icon
                        // exportOptions: {
                        // columns: [0,1,2,3,4,5,6,7,8,9]
                        // }
                    },
                ]
            }
        });
    });
    </script>
</body>

</html>