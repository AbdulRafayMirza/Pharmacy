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
                                    <li class="breadcrumb-employee"><a href="javascript:void(0);">Master Module</a></li>
                                    <li class="breadcrumb-employee active">Employees</li>
                                </ol>
                                <!--end breadcrumb-->
                            </div>
                            <!--end /div-->
                            <h4 class="page-title">Employees</h4>
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
                                        <div class="form-group row"><label for="text-input-employee-id" class="col-sm-4 col-form-label text-right">Employee ID</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-employee-id" readonly></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-employee-name" class="col-sm-4 col-form-label text-right">Name</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-employee-name"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-employee-father-name" class="col-sm-4 col-form-label text-right">Father Name</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-employee-father-name"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-employee-dob" class="col-sm-4 col-form-label text-right">DOB</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-employee-dob"></div>
                                        </div>
                                        <div class="form-group row"><label for="select-employee-gender" class="col-sm-4 col-form-label text-right">Gender</label>
                                            <div class="col-sm-8"><select class="form-control" type="text" id="select-employee-gender"><option>Male</option></select></div>
                                        </div>
                                        <div class="form-group row"><label for="select-employee-marital-status" class="col-sm-4 col-form-label text-right">Marital Status</label>
                                            <div class="col-sm-8"><select class="form-control" type="text" id="select-employee-marital-status"><option>Single</option></select></div>
                                        </div>
                                        <div class="form-group row"><label for="select-employee-blood-group" class="col-sm-4 col-form-label text-right">Blood Group</label>
                                            <div class="col-sm-8"><select class="form-control" type="text" id="select-employee-blood-group"><option>A+</option></select></div>
                                        </div>
                                        <div class="form-group row"><label for="textarea-input-address" class="col-sm-4 col-form-label text-right">Address</label>
                                            <div class="col-sm-8">
                                                <div class="form-group"><textarea class="form-control" rows="1" style="resize:none" id="textarea-input-address"></textarea></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group row"><label for="select-employee-designation" class="col-sm-4 col-form-label text-right">Designation</label>
                                            <div class="col-sm-8"><select class="form-control" type="text" id="select-employee-designation"><option>Computer Operator</option></select></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-employee-salary" class="col-sm-4 col-form-label text-right">Salary</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-employee-salary"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-official-contact" class="col-sm-4 col-form-label text-right">Official Contact</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-official-contact"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-employee-personal-contact" class="col-sm-4 col-form-label text-right">Personal Contact</label>
                                            <div class="col-sm-8"><input class="form-control" type="text" id="text-input-employee-personal-contact"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-employee-email" class="col-sm-4 col-form-label text-right">Email</label>
                                            <div class="col-sm-8"><input class="form-control" type="email" id="text-input-employee-email"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12"><input class="form-control" type="file" accept="image/*" id="text-input-employee-image"></div>
                                        </div>
                                        <div class="form-group row"><label for="text-input-employee-active" class="col-sm-9 col-form-label text-right">
                                            <input class="form-control" type="checkbox" style="height: 15px; width: 15px; display: inline-block;" id="text-input-employee-active">&emsp;Active</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                    </div>
                                    <div class="col-lg-3">
                                        <fieldset style="border: 1px solid silver; padding: 10px;">
                                            <legend>Guarantor</legend>
                                            <div class="form-group row"><label for="select-employee-guarantor-name" class="col-sm-4 col-form-label text-right">Name</label>
                                                <div class="col-sm-8"><input class="form-control" type="text" id="text-input-employee-guarantor-name"></div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-guarantor-address" class="col-sm-4 col-form-label text-right">Address</label>
                                                <div class="col-sm-8"><input class="form-control" type="text" id="text-input-employee-guarantor-address"></div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-guarantor-contact" class="col-sm-4 col-form-label text-right">Contact</label>
                                                <div class="col-sm-8"><input class="form-control" type="text" id="text-input-guarantor-contact"></div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-employee-guarantor-nic" class="col-sm-4 col-form-label text-right">NIC</label>
                                                <div class="col-sm-8"><input class="form-control" type="text" id="text-input-employee-guarantor-nic"></div>
                                            </div>
                                        </fieldset>
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
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 155.889px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Employee Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 240.889px;" aria-label="Position: activate to sort column ascending">Father Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 113.889px;" aria-label="Office: activate to sort column ascending">DOB</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Marital Status</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Gender</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Salary</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Designation</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Address</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Personal Contact</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Official Contact</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">Email</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51.8889px;" aria-label="Age: activate to sort column ascending">NIC</th>
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