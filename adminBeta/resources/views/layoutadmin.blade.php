<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Movical | SV</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

 <!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>   

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{'bower_components/bootstrap/dist/css/bootstrap.min.css'}}">
  <!-- Optional theme -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{'bower_components/font-awesome/css/font-awesome.min.css'}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{'bower_components/Ionicons/css/ionicons.min.css'}}">
    

    <!-- Datetimepicker necesary https://eonasdan.github.io/bootstrap-datetimepicker/-->
    <script type="text/javascript" src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js">
    </script>
    <script src="{{'js/moment.min.js'}}"></script>
    <script src="{{'bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.es.min.js'}}"></script>
    <link rel="stylesheet" href="{{'bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css'}}"/>

  <!-- Theme style -->
  <link rel="stylesheet" href="{{'dist/css/AdminLTE.css'}}">
  <link rel="stylesheet" href="{{'css/style.css'}}">
  <link rel="stylesheet" href="{{'css/mediaQuery.css'}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{'dist/css/skins/_all-skins.min.css'}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{'bower_components/morris.js/morris.css'}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{'bower_components/jvectormap/jquery-jvectormap.css'}}">
  
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{'bower_components/bootstrap-daterangepicker/daterangepicker.css'}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'}}">


  <!-- Google Font -->
<style type="text/css">
  .modal-dialog {
  height: 80% !important;
  padding-top:15%;
}



</style>
</head>
<body class="hold-transition skin-blue sidebar-mini" >
<div class="wrapper">

  <header class="main-header"  >
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>-SV</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Movical</b>SV</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Jaime Ramìrez</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Jaime Ramìrez - Web Developer
                  <small>Member since MARRC 2018</small>
                </p>
              </li>
              <!-- Menu Body -->
             <!-- cesion-->
     
              <!-- Menu Footer-->
               
              <li class="user-footer">
                <div  style="text-align: center">
                  <a href="#" class="btn btn-default btn-flat" data-toggle="modal" data-target="#myModal">Cerrar Sesiòn</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-search"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>user  name</p>
          <a href="#"><i class="fa fa-circle text-success"></i> En Linea</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENÙ DE NAVEGACIÒN</li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
       
       
        <li><a href="{{'/'}}"><i class="fa fa-book"></i> <span>Ordenes de Trabajo</span></a>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="background: #F1F3F9">
    <!-- Content Header (Page header) -->
        <section class="content-header" >
          <h1 id="Cabesera">
            Principal
            <small>Ordenes de Trabajo</small>
          </h1>
          <ol class="breadcrumb" >
            <li><a href="#"><i class="fa fa-dashboard"></i> Principal</a></li>
            <li class="active">OTs</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="align-content-around"  id = "contenidoPrincipal" style="  margin-top: 15px; margin-left: 20px !important; margin-right: 20px !important" >
         
            <!--Contenido-->
            @yield('contenido')
          

             

        </section>
  
  </div>

<!-- Modal -->
<div class="modal modal-danger fade" id="myModal" >
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Cerrar sesiòn</h4>
              </div>
              <div class="modal-body">
                <p>!!Esta seguro!!</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-outline">Cerrar sesiòn</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018 <a href="">Jaime Ramìrez</a>.</strong> All rights
    reserved.
  </footer>



<script type="text/javascript">
                    $(document).ready(function(){
            var date_input=$('input[name="date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
              format: 'mm/dd/yyyy',
              container: container,
              todayHighlight: true,
              autoclose: true,
              language: 'es'


            })
          })
  </script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
