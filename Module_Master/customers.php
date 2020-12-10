<?php
include_once('../conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Pharmacy - Customer</title>

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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Master Module</a></li>
                                    <li class="breadcrumb-item active">Customer</li>
                                </ol>
                                <!--end breadcrumb-->
                            </div>
                            <!--end /div-->
                            <h4 class="page-title">Customer</h4>
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
                                <form id="customerform">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-right">Customer ID</label>
                                                    <div class="col-sm-9"><input value="" class="form-control"
                                                    id="customerid" readonly></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label text-right">Customer Name</label>
                                                <div class="col-sm-9"><input class="form-control" type="text"
                                                        id="customer_name"></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label text-right">Category</label>
                                                <div class="col-sm-9"><select class="form-control" type="text"
                                                        id="customer_category">
                                                        <option selected disabled>Select Category</option>
                                                        <option value="COMMON">COMMON</option>
                                                        <option value="DOCTOR">DOCTOR</option>
                                                        <option value="HOSPITAL">HOSPITAL</option>
                                                        <option value="CLINIC">CLINIC</option>
                                                        <option value="PHARMACY">PHARMACY</option>
                                                        <option value="WHOLESELLER">WHOLESELLER</option>
                                                        <option value="OTHER">OTHER</option>
                                                    </select></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label text-right">Customer Type<small>(For
                                                        GST Only)</small></label>
                                                <div class="col-sm-9"><select class="form-control" type="text"
                                                        id="customer_type">
                                                        <option selected disabled>Select Customer Type</option>
                                                        <option value="Local">Local</option>
                                                        <option value="Outsider">Outsider</option>
                                                    </select></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label text-right">Phone</label>
                                                <div class="col-sm-9"><input class="form-control" type="text"
                                                        data-inputmask="'mask': '9999-9999999'" id="phone"
                                                        onchange="checkNumber();" placeholder="e.g. 0300-0000000">
                                                </div>
                                            </div>
                                            <div class="form-group row"><label for="textarea-input-address"
                                                    class="col-sm-3 col-form-label text-right">Address</label>
                                                <div class="col-sm-9">
                                                    <div class="form-group"><textarea class="form-control" rows="1"
                                                            style="resize:none" id="address"></textarea></div>
                                                </div>
                                                <!-- <div class="col-sm-3"><input class="btn btn-info" type="button" id=""
                                                        value="Excel"></div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group row"><label for="text-input-customer-email"
                                                    class="col-sm-3 col-form-label text-right">Email</label>
                                                <div class="col-sm-9"><input class="form-control" type="email"
                                                        id="email"></div>
                                            </div>
                                            <div class="form-group row"><label for="select-customer-class"
                                                    class="col-sm-3 col-form-label text-right">Class</label>
                                                <div class="col-sm-9"><select class="form-control" type="text"
                                                        id="class">
                                                        <option selected disabled>Select Class</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                    </select></div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-customer-remarks"
                                                    class="col-sm-3 col-form-label text-right">Remarks</label>
                                                <div class="col-sm-9"><input class="form-control" type="text"
                                                        id="remarks"></div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-customer-reg-date"
                                                    class="col-sm-3 col-form-label text-right">Reg. Date</label>
                                                <div class="col-sm-9"><input class="form-control" type="date"
                                                        id="regdate"></div>
                                            </div>
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
                                            <button type="button" id="newBtn" class="btn btn-primary px-5 py-2 mr-2"><i
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
                                    <div class="col-lg-12">

                                        <table id="datatable" class="table table-bordered"
                                            style="border-collapse: collapse; border-spacing: 0px; width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th>Customer Name</th>
                                                    <th>Category</th>
                                                    <th>Customer Type</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Email</th>
                                                    <th>Class</th>
                                                    <th>Remarks</th>
                                                    <th>Reg Date</th>
                                                </tr>
                                            </thead>
                                            <tbody id="customers_body">
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


    <!-- Print Excel File functionality start -->
    <script>
    $(document).ready(function() {
        $('#datatable').dataTable().fnDestroy();
        initializeDatatable();
    });

    function initializeDatatable() {
        $('#datatable').dataTable({

            responsive: true,
            dom: 'Bfrtip',
            buttons: {
                dom: {
                    button: {
                        className: 'btn btn-success '
                    }
                },
                buttons: [{
                    extend: 'csv',
                    text: '<i class="fas fa-file-excel"></i> Print to Excel', //u can define a diferent text or icon
                    // exportOptions: {
                    // columns: [0,1,2,3,4,5,6,7,8,9]
                    // }
                }, ]
            }
        });
    }
    </script>
    <!-- Print Excel File functionality start -->

    <!-- form refresh using ajax start -->
    <script>
    $('#newBtn').on('click', function() {
        ResetForm();
    })
    </script>
    <!-- form refresh using ajax end -->

    <!-- Phone No Validation start-->
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script>
    $(":input").inputmask();

    function checkNumber() {
        str = document.getElementById('phone').value;

        if (str.substring(0, 2) == '03') {
            jQuery('#buttonsubmit').prop("disabled", false);
        } else {
            alert('Please enter correct mobile number');
            jQuery('#buttonsubmit').prop("disabled", true);
            return false;
        }
    }
    </script>
    <!-- Phone No Validation end-->

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
            data: 'columnName=' + 'CusotmerID' + '&tableName=' + 'customers',
            success: function(response) {
                $('#customerid').val(response);
            }
        })
    }

    function fetch_table_data() {
        $.ajax({
            url: 'get_CustomersData.php',
            success: function(response) {
                console.log(response);
                $('#datatable').dataTable().fnDestroy();
                $('#customers_body').html(response);
                // $('#datatable').dataTable();
                initializeDatatable();
            }
        })
    }
    </script>
    <!-- Refresh page using ajax , get autoincrement/MaxId , get table data using ajax end-->


    <!-- customer form submit using ajax -->
    <script>
    $('#customerform').on('submit', function(e) {

        e.preventDefault();

        var customerid = $('#customerid').val();
        var name = $('#customer_name').val();
        var category = $('#customer_category').val();
        var type = $('#customer_type').val();
        var phone = $('#phone').val();
        var address = $('#address').val();
        var email = $('#email').val();
        var classes = $('#class').val();
        var remarks = $('#remarks').val();
        var regdate = $('#regdate').val();

        $.ajax({
            type: 'post',
            url: 'customersubmit.php',
            data: 'customerid=' + customerid + "&name=" + name + "&category=" + category + "&type=" +
                type + "&phone=" + phone + "&address=" + address + "&email=" + email + "&class=" +
                classes + "&remarks=" + remarks + "&regdate=" + regdate,
            success: function(response) {
                // console.log(response);
                alert(response);

                ResetForm();
                getMaxId();
                fetch_table_data();
            }
        });

    });
    </script>

    <!-- Reset Form without page Refresh -->
    <script>
    function ResetForm() {
        // $('#customerid').val('');
        $('#customer_name').val('');
        $('#customer_category').val('');
        $('#customer_type').val('');
        $('#phone').val('');
        $('#address').val('');
        $('#email').val('');
        $('#class').val('');
        $('#remarks').val('');
        $('#regdate').val('');
    }
    </script>
</body>

</html>