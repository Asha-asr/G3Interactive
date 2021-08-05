<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <meta name="description" content="t">
 <meta name="keywords" content="t">
 <title>Australian Heliponents</title>
 <!-- =============== VENDOR STYLES ===============-->
 <link rel="shortcut icon" href="img/logo.jpg">
 <!-- FONT AWESOME-->
 <link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
 <!-- SIMPLE LINE ICONS-->
 <link rel="stylesheet" href="css/simple-line-icons/css/simple-line-icons.css">
 <!-- select2 -->
 <link rel="stylesheet" href="css/select2.css">
 <!-- select2 -->
 <link rel="stylesheet" href="css/select2-bootstrap.css">
 <!-- DATATABLES-->
 <link rel="stylesheet" href="js/datatables-colvis/css/dataTables.colVis.css">
 <link rel="stylesheet" href="js/datatables/media/css/dataTables.bootstrap.css">
 <link rel="stylesheet" href="css/index.css">
 <!-- datepicker -->
 <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" >
 <!-- =============== BOOTSTRAP STYLES ===============-->
 <link rel="stylesheet" href="css/bootstrap.css" id="bscss">
 <!-- =============== APP STYLES ===============-->
 <link rel="stylesheet" href="css/app.css" id="maincss">
 <!-- =============== custom ===============-->
 <link rel="stylesheet" href="css/theme-a.css" id="maincss">
</head>

<!-- sidebar-->
<aside class="aside">
 <!-- START Sidebar (left)-->
 <div class="aside-inner">
  <nav data-sidebar-anyclick-close="" class="sidebar">
   <!-- START sidebar nav-->
   <ul class="nav">
    <!-- START user info-->
    <li class="has-user-block">
     <div class="user-box-menu">
      <div class="item user-block">
       <!-- User picture-->
       <div class="user-block-picture">
        <div class="user-block-status">
         <!-- <img src="img/avatar5.png" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle"> -->
         <!-- <div class="circle circle-success circle-lg"></div> -->
       </div>
     </div>
     <!-- Name and Job-->
     <div class="user-block-info">
      <span class="user-block-name">Hello, Admin</span>
      <span class="user-block-role">Manager</span>
    </div>
  </div>
</div>
</li>
<li class=" ">
 <a href="view-job.php" title="Job">
  <em class="fa fa-briefcase"></em>
  <span>Jobs</span>
</a>
</li>
</ul>

<!-- END sidebar nav-->
</nav>
</div>
<!-- END Sidebar (left)-->
</aside>

<!-- =============== VENDOR SCRIPTS ===============-->
<!-- JQUERY-->
<script src="js/jquery.js"></script>
<!-- BOOTSTRAP-->
<script src="js/bootstrap.js"></script>
<!-- STORAGE API-->
<script src="js/jquery.storageapi.js"></script>
<!-- =============== PAGE VENDOR SCRIPTS ===============-->

<!-- select2 -->
<script src="js/select2.js"></script>
<!-- WYSIWYG-->
<script src="js/bootstrap-wysiwyg.js"></script>
<script src="js/jquery.hotkeys.js"></script>
<!-- MOMENT JS-->
<script src="js/moment-with-locales.min.js"></script>
<!-- DATETIMEPICKER-->
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js">
</script>
<script src="js/bootstrap-filestyle.js" type="text/javascript" ></script>
<!-- Demo-->
<script src="js/demo/demo-forms.js"></script>

<!-- DATATABLES-->
<script src="js/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="js/datatables-colvis/js/dataTables.colVis.js"></script>
<script src="js/datatables/media/js/dataTables.bootstrap.js"></script>
<script src="js/datatables-buttons/js/dataTables.buttons.js"></script>
<script src="js/datatables-buttons/js/buttons.bootstrap.js"></script>
<script src="js/datatables-buttons/js/buttons.colVis.js"></script>
<script src="js/datatables-buttons/js/buttons.flash.js"></script>
<script src="js/datatables-buttons/js/buttons.html5.js"></script>
<script src="js/datatables-buttons/js/buttons.print.js"></script>
<script src="js/datatables-responsive/js/dataTables.responsive.js"></script>
<script src="js/datatables-responsive/js/responsive.bootstrap.js"></script>
<script src="js/demo/demo-datatable.js"></script>

<!-- =============== APP SCRIPTS ===============-->
<script src="js/app.js"></script>
<script src="js/signature_pad.js"></script>
<!-- <script src="js/demo.js"></script> -->

<div>
  @yield('content')
</div>