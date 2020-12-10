<?php
include_once('../conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Pharmacy - Doctor Profile</title>
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
                                    <li class="breadcrumb-item active">Extra</li>
                                </ol>
                                <!--end breadcrumb-->
                            </div>
                            <!--end /div-->
                            <h4 class="page-title">Doctor Profile</h4>
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
                                <form id="doctorprofileform">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row"><label
                                                    class="col-sm-2 col-form-label text-right">Doctor ID</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="id" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-2 col-form-label text-right">Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="name" required>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-2 col-form-label text-right">Nick Name</label>
                                                <div class="col-sm-10"><input class="form-control" type="text"
                                                        id="nickname"></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-2 col-form-label text-right">Phone</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"
                                                        data-inputmask="'mask': '9999-9999999'" id="phone"
                                                        onchange="checkNumber();" placeholder="e.g. 0300-0000000">
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-2 col-form-label text-right">Address</label>
                                                <div class="col-sm-10">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="5" style="resize:none"
                                                            id="address" required>
                                                            </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group row"><label
                                                    class="col-sm-2 col-form-label text-right">Email</label>
                                                <div class="col-sm-10"><input class="form-control" type="email"
                                                        id="email">
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-2 col-form-label text-right">Sex</label>
                                                <div class="col-sm-10"><select class="form-control" id="sex">
                                                        <option>Select Sex Type</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-2 col-form-label text-right">Speciality</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="speciality">
                                                        <option selected disabled>Select Speciality</option>
                                                        <?php
                                                            $sql = 'SELECT * FROM doctorspeciality';
                                                            $result = mysqli_query($conn,$sql);
                                                            if(mysqli_num_rows($result) > 0){
                                                                while($row = mysqli_fetch_assoc($result)){
                                                                    echo'
                                                                        <option value="'.$row['Description'].'">'.$row['Description'].'</option>
                                                                    ';
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <button type="button" class="btn btn-primary px-5 py-2 mr-2"><i
                                                    class="fas fa-trash"></i>&emsp;Delete</button>
                                            <button type="button" class="btn btn-primary px-5 py-2 mr-2"><i
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
                                    <div class="col-lg-12">
                                        <table id="datatable"
                                            class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline"
                                            style="border-collapse: collapse; border-spacing: 0px; width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th>Name</th>
                                                    <th>Nick Name</th>
                                                    <th>Sex</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Email</th>
                                                    <th>Speciality</th>
                                                </tr>
                                            </thead>
                                            <tbody id="profile_body">
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
            data: 'columnName=' + 'DoctorID' + '&tableName=' + 'doctorprofile',
            success: function(response) {
                $('#id').val(response);
            }
        })
    }

    function fetch_table_data() {
        $.ajax({
            url: 'get_DoctorProfileData.php',
            success: function(response) {
                console.log(response);
                $('#datatable').dataTable().fnDestroy();
                $('#profile_body').html(response);
                $('#datatable').dataTable();
            }
        })
    }
    </script>
    <!-- Refresh page using ajax , get autoincrement/MaxId , get table data using ajax end-->

    <!-- doctorprofile form submit using ajax -->
    <script>
    $('#doctorprofileform').on('submit', function(e) {

        e.preventDefault();

        var id = $('#id').val();
        var name = $('#name').val();
        var nickname = $('#nickname').val();
        var phone = $('#phone').val();
        var address = $('#address').val();
        var email = $('#email').val();
        var sex = $('#sex').val();
        var speciality = $('#speciality').val();

        $.ajax({
            type: 'post',
            url: 'doctorprofilesubmit.php',
            data: 'id=' + id + '&name=' + name + '&nickname=' + nickname + '&phone=' + phone +
                '&address=' + address + '&email=' + email + '&sex=' + sex + '&speciality=' + speciality,
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
        // $('#id').val('');
        $('#name').val('');
        $('#nickname').val('');
        $('#phone').val('');
        $('#address').val('');
        $('#email').val('');
        $('#sex').val('');
        $('#speciality').val('');
    }
    </script>

</body>

</html>