<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Pharmacy - Company</title>
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
                                <form id="companyform">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-right">Company Name</label>
                                                <div class="col-sm-9"><input class="form-control" type="text"
                                                        id="companyname" required>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label text-right">Phone</label>
                                                <div class="col-sm-9"><input class="form-control" type="text"
                                                        data-inputmask="'mask': '9999-9999999'" id="phone"
                                                        onchange="checkNumber();" placeholder="e.g. 0300-0000000"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label text-right">GSTIN</label>
                                                <div class="col-sm-9"><input class="form-control" type="number"
                                                        placeholder="GSTIN should be 15 digits" id="gstin" required>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label text-right">Address</label>
                                                <div class="col-sm-9">
                                                    <div class="form-group"><textarea class="form-control" rows="5"
                                                            style="resize:none" id="address" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label text-right">Company Owner</label>
                                                <div class="col-sm-9"><input class="form-control" type="text"
                                                        id="companyowner" required></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label text-right">Email</label>
                                                <div class="col-sm-9"><input class="form-control" type="email"
                                                        id="email" required>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label text-right">PAN</label>
                                                <div class="col-sm-9"><input class="form-control" type="number"
                                                        placeholder="Autofilled from GSTIN field" id="pan">
                                                </div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label text-right">Remarks</label>
                                                <div class="col-sm-9"><input class="form-control" type="text"
                                                        id="remarks">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-primary px-5 py-2 mr-2"
                                                id="buttonsubmit"><i class="fas fa-save"></i>&emsp;Save</button>
                                            <button type="button" id="newBtn" class="btn btn-primary px-5 py-2 mr-2"><i
                                                    class="fa fa-times"></i>&emsp;Exit</button>
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


    <!-- Company form submit using ajax -->
    <script>
    $('#companyform').on('submit', function(e) {

        e.preventDefault();

        var companyname = $('#companyname').val();
        var phone = $('#phone').val();
        var gstin = $('#gstin').val();
        var address = $('#address').val();
        var companyowner = $('#companyowner').val();
        var email = $('#email').val();
        var pan = $('#pan').val();
        var remarks = $('#remarks').val();

        $.ajax({
            type: 'post',
            url: 'companysubmit.php',
            data: 'companyname=' + companyname + "&phone=" + phone + "&gstin=" + gstin + "&address=" +
                address + "&companyowner=" + companyowner + "&email=" + email + "&pan=" + pan +
                "&remarks=" + remarks,
            success: function(response) {
                alert(response);

                ResetForm();
            }
        });
    });
    </script>

    <!-- Reset Form without page Refresh -->
    <script>
    function ResetForm() {
        $('#companyname').val('');
        $('#phone').val('');
        $('#gstin').val('');
        $('#address').val('');
        $('#companyowner').val('');
        $('#email').val('');
        $('#pan').val('');
        $('#remarks').val('');
    }
    </script>

</body>

</html>