<?php
include_once('../conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Pharmacy - Items</title>
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
                                    <li class="breadcrumb-item active">Items</li>
                                </ol>
                                <!--end breadcrumb-->
                            </div>
                            <!--end /div-->
                            <h4 class="page-title">Items</h4>
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
                                <form id="itemsform">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Item ID</label>
                                                <div class="col-sm-8"><input value="" class="form-control" id="itemid"
                                                        readonly></div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-item-batch-number"
                                                    class="col-sm-4 col-form-label text-right">Batch Number</label>
                                                <div class="col-sm-8"><input class="form-control" type="text"
                                                        id="batchnumber"></div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-item-name"
                                                    class="col-sm-4 col-form-label text-right">Item Name</label>
                                                <div class="col-sm-8"><input class="form-control" type="text"
                                                        id="itemname" required></div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-item-short-name"
                                                    class="col-sm-4 col-form-label text-right">Short Name</label>
                                                <div class="col-sm-8"><input class="form-control" type="text"
                                                        id="shortname"></div>
                                            </div>
                                            <div class="form-group row"><label for="select-item-packing-type"
                                                    class="col-sm-4 col-form-label text-right">Packing Type</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="packingtype">
                                                        <option selected disabled>Select Packing Type</option>
                                                        <?php
                                                            $sql = 'SELECT * FROM packingtype';
                                                            $result = mysqli_query($conn,$sql);
                                                            if(mysqli_num_rows($result) > 0){
                                                                while($row = mysqli_fetch_assoc($result)){
                                                                    echo'
                                                                        <option value="'.$row['PackingType'].'">'.$row['PackingType'].'</option>
                                                                    ';
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label for="select-item-category"
                                                    class="col-sm-4 col-form-label text-right">Category</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="category">
                                                        <option selected disabled>Select Category</option>
                                                        <option value="Finished Goods">Finished Goods</option>
                                                        <option value="Raw Materials">Raw Materials</option>
                                                        <option value="General">General</option>
                                                        <option value="Packing Materials">Packing Materials</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label for="select-item-company"
                                                    class="col-sm-4 col-form-label text-right">Company</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" type="text" id="company">
                                                        <option selected disabled>Select Item Company</option>
                                                        <?php
                                                            $sql = 'SELECT * FROM itemcompany';
                                                            $result = mysqli_query($conn,$sql);
                                                            if(mysqli_num_rows($result) > 0){
                                                                while($row = mysqli_fetch_assoc($result)){
                                                                    echo'
                                                                        <option value="'.$row['CompanyName'].'">'.$row['CompanyName'].'</option>
                                                                    ';
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group row"><label for="text-input-item-gst-percent"
                                                    class="col-sm-4 col-form-label text-right">GST (%)</label>
                                                <div class="col-sm-8"><input class="form-control" type="text" id="gst"
                                                        value="0">
                                                </div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-item-selling-price"
                                                    class="col-sm-4 col-form-label text-right">Selling Price</label>
                                                <div class="col-sm-8"><input class="form-control" type="text" value="0"
                                                        id="sellingprice"></div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-alarm-quantity"
                                                    class="col-sm-4 col-form-label text-right">Alarm Quantity</label>
                                                <div class="col-sm-8"><input class="form-control" type="text" value="0"
                                                        id="alarmquantity"></div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-item-units-in-pack"
                                                    class="col-sm-4 col-form-label text-right">Units in Pack</label>
                                                <div class="col-sm-8"><input class="form-control" type="text" value="0"
                                                        id="unitsinpack"></div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-item-barcode"
                                                    class="col-sm-4 col-form-label text-right">Barcode</label>
                                                <div class="col-sm-8"><input class="form-control" type="text" value="0"
                                                        id="barcode"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group row"><label for="text-input-item-gst-percent"
                                                    class="col-sm-4 col-form-label text-right">Trade Price</label>
                                                <div class="col-sm-8"><input class="form-control" type="text" value="0"
                                                        id="tradeprice"></div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-item-selling-price"
                                                    class="col-sm-4 col-form-label text-right">Selling %</label>
                                                <div class="col-sm-8"><input class="form-control" type="text" value="0"
                                                        id="sellingpercent"></div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-alarm-quantity"
                                                    class="col-sm-4 col-form-label text-right">Packs in Carton</label>
                                                <div class="col-sm-8"><input class="form-control" type="text" value="0"
                                                        id="carton"></div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-item-units-in-pack"
                                                    class="col-sm-4 col-form-label text-right">RFID Tag</label>
                                                <div class="col-sm-8"><input class="form-control" type="text" id="rfid"
                                                        value="0">
                                                </div>
                                            </div>
                                            <div class="form-group row"><label for="text-input-item-barcode"
                                                    class="col-sm-4 col-form-label text-right">HSN</label>
                                                <div class="col-sm-8"><input class="form-control" type="text" id="hsn">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <button type="button" class="btn btn-primary px-5 py-2 mr-2"><i
                                                    class="fas fa-trash"></i>&emsp;Delete</button>
                                            <button type="button" class="btn btn-primary px-5 py-2 mr-2"><i
                                                    class="fas fa-edit"></i>&emsp;Update</button>
                                            <button type="submit" class="btn btn-primary px-5 py-2 mr-2"><i
                                                    class="fas fa-save" id="buttonsubmit"></i>&emsp;Save</button>
                                            <button type="button" id="newBtn" class="btn btn-primary px-5 py-2 mr-2"><i
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
                                    <div class="col-lg-12 table-responsive">

                                        <table id="datatable" class="table table-bordered "
                                            style="border-collapse: collapse; border-spacing: 0px; width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th>Item ID</th>
                                                    <th>Batch Number</th>
                                                    <th>Item Name</th>
                                                    <th>Short Name</th>
                                                    <th>Packing Type</th>
                                                    <th>Category</th>
                                                    <th>Company</th>
                                                    <th>Trade Price</th>
                                                    <th>Retail Price</th>
                                                    <th>Alarm Quantity</th>
                                                    <th>Unit in Pack</th>
                                                    <th>Packs in Carton</th>
                                                    <th>Barcode Number</th>
                                                    <th>Selling Percent</th>
                                                    <th>GST Rate</th>
                                                    <th>HSN</th>
                                                </tr>
                                            </thead>
                                            <tbody id="item_body">
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

            // responsive: true,
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
            data: 'columnName=' + 'ItemID' + '&tableName=' + 'items',
            success: function(response) {
                $('#itemid').val(response);
            }
        })
    }

    function fetch_table_data() {
        $.ajax({
            url: 'get_ItemData.php',
            success: function(response) {
                console.log(response);
                $('#datatable').dataTable().fnDestroy();
                $('#item_body').html(response);
                // $('#datatable').dataTable();
                initializeDatatable();

            }
        })
    }
    </script>
    <!-- Refresh page using ajax , get autoincrement/MaxId , get table data using ajax end-->


    <!-- itemcompany form submit using ajax -->
    <script>
    $('#itemsform').on('submit', function(e) {

        e.preventDefault();

        var itemid = $('#itemid').val();
        var batchnumber = $('#batchnumber').val();
        var itemname = $('#itemname').val();
        var shortname = $('#shortname').val();
        var packingtype = $('#packingtype').val();
        var category = $('#category').val();
        var company = $('#company').val();
        var gst = $('#gst').val();
        var sellingprice = $('#sellingprice').val();
        var alarmquantity = $('#alarmquantity').val();
        var unitsinpack = $('#unitsinpack').val();
        var barcode = $('#barcode').val();
        var tradeprice = $('#tradeprice').val();
        var sellingpercent = $('#sellingpercent').val();
        var carton = $('#carton').val();
        var rfid = $('#rfid').val();
        var hsn = $('#hsn').val();

        $.ajax({
            type: 'post',
            url: 'itemsubmit.php',
            data: 'itemid=' + itemid + '&batchnumber=' + batchnumber + '&itemname=' + itemname +
                '&shortname=' + shortname + '&packingtype=' + packingtype + '&category=' + category +
                '&company=' + company + '&gst=' + gst + '&sellingprice=' + sellingprice +
                '&alarmquantity=' + alarmquantity + '&unitsinpack=' + unitsinpack + '&barcode=' +
                barcode + '&tradeprice=' + tradeprice + '&sellingpercent=' + sellingpercent +
                '&carton=' + carton + '&rfid=' + rfid + '&hsn=' + hsn,

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
        // $('#itemid').val('');
        $('#batchnumber').val('');
        $('#itemname').val('');
        $('#shortname').val('');
        $('#packingtype').val('');
        $('#category').val('');
        $('#company').val('');
        $('#gst').val('0');
        $('#sellingprice').val('0');
        $('#alarmquantity').val('0');
        $('#unitsinpack').val('0');
        $('#barcode').val('0');
        $('#tradeprice').val('0');
        $('#sellingpercent').val('0');
        $('#carton').val('0');
        $('#rfid').val('0');
        $('#hsn').val('');
    }
    </script>


</body>

</html>