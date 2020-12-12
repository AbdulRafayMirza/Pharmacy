<?php
include_once('../conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Pharmacy - Item Company</title>

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
                                    <li class="breadcrumb-item active">Item Company</li>
                                </ol>
                                <!--end breadcrumb-->
                            </div>
                            <!--end /div-->
                            <h4 class="page-title">Item Company</h4>
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
                                <form id="itemcompanyform">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-group row"><label for="text-input-company-id"
                                                    class="col-sm-4 col-form-label text-right">Company ID</label>
                                                <div class="col-sm-8"><input value="" class="form-control"
                                                        id="companyid" readonly></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group row"><label for="text-input-company-name"
                                                    class="col-sm-3 col-form-label text-right">Company Name</label>
                                                <div class="col-sm-9"><input class="form-control" type="text"
                                                        id="companyname" required></div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <button type="button" id="delbtn" disabled class="btn btn-primary px-5 py-2 mr-2"><i
                                                    class="fas fa-trash"></i>&emsp;Delete</button>
                                            <button type="submit" id="updbtn" disabled class="btn btn-primary px-5 py-2 mr-2"><i
                                                    class="fas fa-edit"></i>&emsp;Update</button>
                                            <button type="submit" id="savebtn" class="btn btn-primary px-5 py-2 mr-2"><i
                                                    class="fas fa-save"></i>&emsp;Save</button>
                                            <button type="button" id="newBtn" class="btn btn-primary px-5 py-2"><i
                                                    class="fas fa-file"></i>&emsp;New</button>
                                        </div>
                                    </div>
                                </form>

                                <br>
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
                                            style="border-collapse: collapse; border-spacing: 0px; width: 100%;"
                                            role="grid" aria-describedby="datatable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>Company ID</th>
                                                    <th>Company Name</th>
                                                </tr>
                                            </thead>
                                            <tbody id="itemcompany_body">
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
            data: 'columnName=' + 'CompanyID' + '&tableName=' + 'itemcompany',
            success: function(response) {
                $('#companyid').val(response);
            }
        })
    }

    function fetch_table_data() {
        $.ajax({
            url: 'get_ItemCompanyData.php',
            success: function(response) {
                console.log(response);
                $('#datatable').dataTable().fnDestroy();
                $('#itemcompany_body').html(response);
                $('#datatable').dataTable();
            }
        })
    }
    </script>
    <!-- Refresh page using ajax , get autoincrement/MaxId , get table data using ajax end-->


    <!-- itemcompany form submit using ajax -->
    <script>
    $('#itemcompanyform').on('submit', function(e) {

        e.preventDefault();

        var companyid = $('#companyid').val();
        var companyname = $('#companyname').val();

        $.ajax({
            type: 'post',
            url: 'itemcompanysubmit.php',
            data: 'companyid=' + companyid + "&companyname=" + companyname,
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
        // $('#companyid').val(''); 
        $('#companyname').val('');
        
        getMaxId();
        selectedId = -1;

        $('#delbtn').prop('disabled', true);
        $('#updbtn').prop('disabled', true);
        $('#savebtn').prop('disabled', false);

        $('#datatable > tbody  > tr').each(function(index, tr) {
            tr.style.background = 'rgb(255,255,255)'
            tr.style.color = '#869ab8';
        });
    }
    </script>

    <!-- Selected Row Delete Without Refreshing Page Start -->
    <script>

    function rowselect(id) {
        $('#datatable > tbody  > tr').each(function(index, tr) {
            tr.style.background = 'rgb(255,255,255)'
            tr.style.color = '#869ab8';
        });

        selectedId = id;
        
        $('#delbtn').prop('disabled', false);
        $('#updbtn').prop('disabled', false);
        $('#savebtn').prop('disabled', true);

        $("#" + id).css('background', 'rgba(0,0,0,.35)');
        $("#" + id).css('color', 'rgb(0,0,0)');

        $('#companyid').val(id);
        $('#companyname').val($("#" + id).data('name'));
    }

    // Delete functionality start
    $('#delbtn').click(function() {
        var r = confirm("Are you sure you want to delete this Item Company - " + $("#" + selectedId).data('name') + "?");
        if (r == true) {
            $.ajax({
                type: 'post',
                url: 'deleteDataFromTable.php',
                data: 'tableName=' + 'itemcompany' + "&columnName=" + 'CompanyID' + "&dataId=" + selectedId,
                success: function(response) {
                    // console.log(response);
                    
                    ResetForm();
                    getMaxId();
                    fetch_table_data();
                    alert(response);
                }
            });
        }
    })
    // Delete functionality end

    </script>

</body>

</html>