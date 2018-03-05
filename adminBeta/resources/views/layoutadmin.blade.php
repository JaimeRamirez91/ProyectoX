<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Proyectox</title>

        
       
  <!-- Bootstrap core CSS-->
 <link href="{{'css/app.css'}}" rel="stylesheet" type="text/css">

   <!-- Custom fonts for this template-->
 <link href="{{'css/sb-admin.css'}}" rel="stylesheet" type="text/css">
      
      <!-- Custom styles for this font-->
 <link href="{{' vendor/font-awesome/css/font-awesome.min.css'}}" rel="stylesheet" type="text/css">

   <!-- Custom styles -->
   <link href="{{'css/style.css'}}" rel="stylesheet" type="text/css">
 
 

 
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav"
  style="background: #00796B !important; color: white !important;">
    <a class="navbar-brand" href="">Movikal Sv</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive" 

    >
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Principal">
          <a class="nav-link" href="">
            <i class="fa fa-fw fa-dashboard" style="color: white !important"></i>
            <span class="nav-link-text" style="color: white !important">Principal</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="">
            <i class="fa fa-fw fa-table" style="color: white !important"></i>
            <span class="nav-link-text" style="color: white !important">Home</span>
          </a>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Administraciòn">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench" style="color: white !important"></i>
            <span class="nav-link-text" style="color: white !important">Administraciòn</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="">admin1</a>
            </li>
            <li>
              <a href="">admin2</a>
            </li>
          </ul>
        </li>
        
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link" style="color: white !important"></i>
            <span class="nav-link-text" style="color: white !important">Link</span>
          </a>
        </li>
      </ul>

      <!-- < para cerrar el  menu -->
      <ul class="navbar-nav sidenav-toggler"  style=" color: white !important;">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>

      <!-- cesion-->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" style="color: white !important">
            <i class="fa fa-fw fa-sign-out" style="color: white !important"></i>Cerrar cesion</a>
        </li>
      </ul>

    </div>
  </nav>

  <div class="content-wrapper">
    
    <div class="container-fluid" style="background: none !important;">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Principal</a>
        </li>
        <li class="breadcrumb-item active">Administracion</li>
      </ol>
      <!--Contenido-->
     @yield('contenido') 

      <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
      <div style="height: 1000px;"></div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © ProyectoX 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">En realidad desea cerrar la cesion</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="login.html">cerrar cesion</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->

    <script src="{{'vendor/jquery/jquery.min.js'}}"></script>

    <script src=" {{'vendor/bootstrap/js/bootstrap.bundle.min.js'}}"></script>
    <!-- Core plugin JavaScript-->

    <script src="{{'vendor/jquery-easing/jquery.easing.min.js'}}"></script>
    <!-- Custom scripts for all pages-->

    <script src="{{'js/sb-admin.min.js'}}"></script>
    <!-- Custom scripts for this page-->
    <!-- Toggle between fixed and static navbar-->
    <script>
    $('#toggleNavPosition').click(function() {
      $('body').toggleClass('fixed-nav');
      $('nav').toggleClass('fixed-top static-top');
    });

    </script>
    <!-- Toggle between dark and light navbar-->
    <script>
    $('#toggleNavColor').click(function() {
      $('nav').toggleClass('navbar-dark navbar-light');
      $('nav').toggleClass('bg-dark bg-light');
      $('body').toggleClass('bg-dark bg-light');
    });

    </script>
  </div>
</body>

</html>
