<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
            <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
            <!-- Font Awesome-->
            <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
            <!-- ico-font-->
            <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
            <!-- Themify icon-->
            <link rel="stylesheet" type="text/css" href="assets/css/themify.css">
            <!-- Flag icon-->
            <!--contacts-->
            <link rel="stylesheet" type="text/css" href="assets/css/select2.css">
            <link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.css">
            <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
            <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
            <link rel="stylesheet" type="text/css" href="assets/css/select2.css">
            <link rel="stylesheet" type="text/css" href="assets/css/owlcarousel.css">
            <link rel="stylesheet" type="text/css" href="assets/css/range-slider.css">
            <!-- Feather icon-->
            <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
            <link rel="stylesheet" type="text/css" href="assets/css/photoswipe.css">
            <link rel="stylesheet" type="text/css" href="assets/css/datatables.css">
            <link rel="stylesheet" type="text/css" href="assets/css/jsgrid.css">
              <link rel="stylesheet" type="text/css" href="assets/css/select2.css">
               <link rel="stylesheet" type="text/css" href="assets/css/dropzone.css">
               <link rel="stylesheet" type="text/css" href="assets/css/date-picker.css">
            <!-- Plugins css start-->
            <!-- Plugins css Ends-->
            <!-- Bootstrap css-->
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
            <!-- App css-->
            <link rel="stylesheet" type="text/css" href="assets/css/style.css">
            <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
        <!-- Responsive css-->
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    </head>
     
    
    <body onload="startTime()">
        <!-- tap on top starts-->
         <div class="tap-top"><i data-feather="chevrons-up"></i></div>
        <!-- tap on tap ends-->
        <!-- page-wrapper Start-->
        <div class="page-wrapper compact-wrapper" id="pageWrapper">
            <?php include 'assets/header.php';?>

           <div class="page-body-wrapper sidebar-icon">
               <?php include 'assets/sidebar.php';?>
                <?php
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                    $filepath = "includes/".$page.".php";
                    if(file_exists($filepath)){
                        include $filepath;
                    } else {
                        include 'includes/error.php';
                    }
                } else {
                    include 'includes/home.php';
                }
                ?>
                <?php include 'assets/footer.php';?>
           </div>
        </div>
        <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
       <script src="assets/js/jsgrid/jsgrid.min.js"></script>
    <script src="assets/js/jsgrid/griddata.js"></script>
    <script src="assets/js/jsgrid/jsgrid.js"></script>
    
    <script src="assets/js/select2/select2.full.min.js"></script>
    <script src="assets/js/select2/select2-custom.js"></script>
    <!-- Sidebar jquery-->
    
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/config.js"></script>
    <script src="assets/js/range-slider/ion.rangeSlider.min.js"></script>
    <script src="assets/js/range-slider/rangeslider-script.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="assets/js/select2/select2.full.min.js"></script>
    <script src="assets/js/select2/select2-custom.js"></script>
    <script src="assets/js/product-tab.js"></script>
    <!-- Plugins JS Ends-->
    <!--chart-->
     <script src="assets/js/chart/morris-chart/raphael.js"></script>
    <script src="assets/js/chart/morris-chart/morris.js"> </script>
    <script src="assets/js/chart/morris-chart/prettify.min.js"></script>
    <script src="assets/js/chart/morris-chart/morris-script.js"></script>
    <!--contact-->
    <script src="assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.custom.js"></script>
     <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/sweet-alert/sweetalert.min.js"></script>
    <script src="assets/js/select2/select2.full.min.js"></script>
    <script src="assets/js/select2/select2-custom.js"></script>
    <script src="assets/js/form-validation-custom.js"></script>
    <script src="assets/js/bookmark/jquery.validate.min.js"></script>
    <script src="assets/js/contacts/custom.js"></script>
   <script src="assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="assets/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <script src="assets/js/touchspin/vendors.min.js"></script>
    <script src="assets/js/touchspin/touchspin.js"></script>
    <script src="assets/js/touchspin/input-groups.min.js"></script>
    <script src="assets/js/tooltip-init.js"></script>
    <script src="assets/js/photoswipe/photoswipe.min.js"></script>
    <script src="assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="assets/js/photoswipe/photoswipe.js"></script>
    <script src="assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatable/datatables/datatable.custom.js"></script>
     <script src="assets/js/dropzone/dropzone.js"></script>
    <script src="assets/js/dropzone/dropzone-script.js"></script>
     <script src="assets/js/email-app.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    </body>
</html>
