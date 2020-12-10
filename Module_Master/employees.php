<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Pharmacy - Employees</title>

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
                                <form id="employeesform">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group row"><label
                                                    class="col-sm-4 col-form-label text-right">Employee ID</label>
                                                <div class="col-sm-8"><input class="form-control" type="text"
                                                        id="employeeid" name="employeeid" readonly></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-4 col-form-label text-right">Name</label>
                                                <div class="col-sm-8"><input class="form-control" type="text"
                                                        id="employeename" name="employeename"></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-4 col-form-label text-right">Father Name</label>
                                                <div class="col-sm-8"><input class="form-control" type="text"
                                                        id="fathername" name="fathername"></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-4 col-form-label text-right">DOB</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="date" id="dob" name="dob">
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-4 col-form-label text-right">Gender</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="gender" name="gender">
                                                        <option>Select Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-4 col-form-label text-right">Marital Status</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="status" name="status">
                                                        <option>Select marital Status</option>
                                                        <option value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-4 col-form-label text-right">Blood Group</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="bloodgroup" name="bloodgroup">
                                                        <option selected disabled>Select Blood Group</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-4 col-form-label text-right">Address</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group"><textarea class="form-control" rows="3"
                                                            style="resize:none" id="address" name="address"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group row"><label
                                                    class="col-sm-4 col-form-label text-right">Designation</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="designation" name="designation">
                                                        <option selected disabled>Select Designation</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Sales Man">Sales Man</option>
                                                        <option value="Computer Operator">Computer Operator</option>
                                                        <option value="Cleaner">Cleaner</option>
                                                        <option value="Visitor">Visitor</option>
                                                        <option value="Audit">Audit</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-4 col-form-label text-right">Salary</label>
                                                <div class="col-sm-8"><input class="form-control" type="number"
                                                        value="0" id="salary" name="salary"></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-4 col-form-label text-right">Official Contact</label>
                                                <div class="col-sm-8"><input class="form-control" type="text"
                                                        data-inputmask="'mask': '9999-9999999'" id="officialcontact"
                                                        name="officialcontact" onchange="checkofficialNumber();"
                                                        placeholder="e.g. 0300-0000000">
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-4 col-form-label text-right">Personal Contact</label>
                                                <div class="col-sm-8"><input class="form-control" type="text"
                                                        data-inputmask="'mask': '9999-9999999'" id="personalcontact"
                                                        name="personalcontact" onchange="checkpersonalNumber();"
                                                        placeholder="e.g. 0300-0000000">
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-4 col-form-label text-right">Email</label>
                                                <div class="col-sm-8"><input class="form-control" type="email"
                                                        id="email" name="email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Image</label>
                                                <div class="col-sm-8"><input class="form-control" type="file"
                                                        accept="image/*" id="image" name="image"></div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-9 col-form-label text-right">
                                                    <input class="form-control" type="checkbox"
                                                        style="height: 15px; width: 15px; display: inline-block;"
                                                        id="active" name="active" value="1">&emsp;Active</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset style="border: 1px solid silver; padding: 10px;">
                                                <legend>Guarantor</legend>
                                                <div class="form-group row"><label
                                                        class="col-sm-3 col-form-label text-right">Name</label>
                                                    <div class="col-sm-9"><input class="form-control" type="text"
                                                            id="guarantorname" name="guarantorname"></div>
                                                </div>
                                                <div class="form-group row"><label
                                                        class="col-sm-3 col-form-label text-right">Address</label>
                                                    <div class="col-sm-9"><input class="form-control" type="text"
                                                            id="guarantoraddress" name="guarantoraddress"></div>
                                                </div>
                                                <div class="form-group row"><label
                                                        class="col-sm-3 col-form-label text-right">Contact</label>
                                                    <div class="col-sm-9"><input class="form-control" type="text"
                                                            data-inputmask="'mask': '9999-9999999'"
                                                            id="guarantorcontact" name="guarantorcontact"
                                                            onchange="checkNumber();" placeholder="e.g. 0300-0000000">
                                                    </div>
                                                </div>
                                                <div class="form-group row"><label
                                                        class="col-sm-3 col-form-label text-right">NIC</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text"
                                                            data-inputmask="'mask': '99999-9999999-9'"
                                                            onchange="checkCNIC();" class="form-control"
                                                            placeholder="e.g. 41111-1111111-1" id="guarantornic"
                                                            name="guarantornic">
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" disabled class="btn btn-primary px-5 py-2 mr-2"><i
                                                    class="fas fa-trash"></i>&emsp;Delete</button>
                                            <button type="submit" disabled class="btn btn-primary px-5 py-2 mr-2"><i
                                                    class="fas fa-edit"></i>&emsp;Update</button>
                                            <button type="submit" class="btn btn-primary px-5 py-2 mr-2"><i
                                                    class="fas fa-save" id="buttonsubmit"></i>&emsp;Save</button>
                                            <button type="button" id="newBtn" class="btn btn-primary px-5 py-2"><i
                                                    class="fas fa-file"></i>&emsp;New</button>
                                        </div>
                                    </div>
                                </form>
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

                                        <table id="datatable" class="table table-bordered "
                                            style="border-collapse: collapse; border-spacing: 0px; width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th>Employee Name</th>
                                                    <th>Father Name</th>
                                                    <th>DOB</th>
                                                    <th>Marital Status</th>
                                                    <th>Gender</th>
                                                    <th>Salary</th>
                                                    <th>Designation</th>
                                                    <th>Address</th>
                                                    <th>Personal Contact</th>
                                                    <th>Official Contact</th>
                                                    <th>Email</th>
                                                    <th>NIC</th>
                                                </tr>
                                            </thead>
                                            <tbody id="employees_body">
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
    <!-- Responsive examples -->
    <script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="../assets/pages/jquery.datatable.init.js"></script>
    <!-- App js -->
    <script src="../assets/js/app.js"></script>


    <!-- form refresh using ajax start -->
    <script>
    $('#newBtn').on('click', function() {
        ResetForm();
    })
    </script>
    <!-- form refresh using ajax end -->


    <!-- "Official Contact Number" Validation start-->
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script>
    $(":input").inputmask();

    function checkofficialNumber() {
        str = document.getElementById('officialcontact').value;

        if (str.substring(0, 2) == '03') {
            jQuery('#buttonsubmit').prop("disabled", false);
        } else {
            alert('Please Enter Correct Official Contact Number');
            jQuery('#buttonsubmit').prop("disabled", true);
            return false;
        }
    }
    </script>
    <!--"Official Contact Number" Validation end-->

    <!-- "Personal Contact Number" Validation start-->
    <script>
    $(":input").inputmask();

    function checkpersonalNumber() {
        str = document.getElementById('personalcontact').value;

        if (str.substring(0, 2) == '03') {
            jQuery('#buttonsubmit').prop("disabled", false);
        } else {
            alert('Please Enter Correct Personal Contact Number');
            jQuery('#buttonsubmit').prop("disabled", true);
            return false;
        }
    }
    </script>
    <!--"Personal Contact Number" Validation end-->

    <!-- "Guarantor Contact Number" Validation start-->
    <script>
    $(":input").inputmask();

    function checkNumber() {
        str = document.getElementById('guarantorcontact').value;

        if (str.substring(0, 2) == '03') {
            jQuery('#buttonsubmit').prop("disabled", false);
        } else {
            alert('Please Enter Contact Number');
            jQuery('#buttonsubmit').prop("disabled", true);
            return false;
        }
    }
    </script>
    <!--"Guarantor Contact Number" Validation end-->

    <!--"CNIC Validation start-->
    <script>
    $(":input").inputmask();

    function checkCNIC() {
        var flag = false;
        regexp = /^(?!000|666)[0-8][0-9]{4}-(?!00)[0-9]{7}-(?!0000)[0-9]{1}$/;
        str = document.getElementById('guarantornic').value;
        if (regexp.test(str)) {
            jQuery('#submitbutton').prop("disabled", false);

        } else {
            alert('Please enter correct CNIC number');
            jQuery('#submitbutton').prop("disabled", true);
            return false;
        }
    }
    </script>
    <!--"CNIC Validation end-->


    <!-- Refresh page using ajax , get autoincrement/MaxId , get table data using ajax start-->
    <script>
    $(document).ready(function() {
        getMaxId();
        fetch_table_data();
    });

    function getMaxId() {
        $.ajax({
            type: 'POST',
            url: 'getMaxIDOfTable.php',
            data: 'columnName=' + 'EmployeeID' + '&tableName=' + 'employees',
            success: function(response) {
                $('#employeeid').val(response);
            }
        })
    }

    function fetch_table_data() {
        $.ajax({
            url: 'get_EmployeesData.php',
            success: function(response) {
                console.log(response);
                $('#datatable').dataTable().fnDestroy();
                $('#employees_body').html(response);
                $('#datatable').dataTable();

            }
        })
    }
    </script>
    <!-- Refresh page using ajax , get autoincrement/MaxId , get table data using ajax end-->


    <!-- Employees form submit using ajax -->
    <script>
    $('#employeesform').on('submit', function(e) {

        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'employeesubmit.php',

            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            
            success: function(response) {
                // console.log(response);

                ResetForm();
                getMaxId();
                fetch_table_data();
            },

        });
    });
    </script>

    <!-- Reset Form without page Refresh -->
    <script>
    function ResetForm() {
        // $('#employeeid').val('');
        $('#employeename').val('');
        $('#fathername').val('');
        $('#dob').val('');
        $('#gender').val('');
        $('#status').val('');
        $('#bloodgroup').val('');
        $('#address').val('');
        $('#designation').val('');
        $('#salary').val('0');
        $('#officialcontact').val('');
        $('#personalcontact').val('');
        $('#email').val('');
        $('#image').val('');
        // $('#active').val('');

        $('#guarantorname').val('');
        $('#guarantoraddress').val('');
        $('#guarantorcontact').val('');
        $('#guarantornic').val('');
    }
    </script>

</body>

</html>