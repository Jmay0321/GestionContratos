<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SecureContractOnline | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <div class="jumbotron text-center">
<!--titulo central-->
<div class="container-center p-3 my-3 bg-warning text-white"> <!--contenedr que pemite tener la linea amarilla-->
<div class=" text-center"> <!--permite poner el texto en el centro-->
<h1>CREACIÓN DEL CONTRATO</h1>
</div>
</div>

<!--tema de la seccion-->
<div class="text-center">
<h4>Bienvenidos a la sección de contratos</h4>
   <h3 class="card-title">Somos los mejores aliados en tus procesos administrativos, legales, empresariales,innovando nuevas
       soluciones tecologicas que optimizan de manera eficiente tus recursos </h3>
</div>



  <!-- Editor de texto en linea -->

  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  <script>
      tinymce.init({
        selector: '#mytextarea'
      });
  </script>         
</div>  
</div>
</div>
 <!-- Fin editor de texto-->  




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h2 class="text-warning"></h2> <!-- TITULO--->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Creación del Contrato</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
         
        <!-- cuadro donde se abre las funciones del editor-->
        <h1>Redacte su Contrato</h1>
        <form method="post">
            <textarea id="mytextarea">Redacte aquí su contrato</textarea>
        </form>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          SECURE CONTRACT ONLINE-SCO
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="container-center p-3">
  <div class="row">
    <div class="col-sm-4  bg-warning">
      <h3>Misión</h3>
      <p>sistematizar procesos para apoyar la mejora del sistema de contrataciones.</p>
      <br>


    </br>

    </div>
    <div class="col-sm-4  bg-primary">
      <h3>Nuestro Objetivo</h3>
      <p>Proporcionar el encuentro entre la oferta y la demanda (pública y privada) de buscadores de empleo y empleadores; facilitando que la ciudadanía acceda a opciones de empleo, 
        y las empresas e instituciones obtengan personal calificado acorde a sus requerimientos.</p>
        <br>
        <br>

    </div>
    <div class="col-sm-4 bg-success">
      <h3>Visión</h3>        
      <p> Ser los lideres proporcionando a la sociedad una plataforma global donde realicen sus contratos en un ambiente de confianza, que su primera experiencia en la creación de su contrato se única y especial</p>
      
    </div>
  </div>
</div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</div> <!-- final del primer contenedor-- >
<!-- jQuery -->
<script src="gestioncontratos/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="gestioncontratos/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- pace-progress -->
<script src="gestioncontratos/public/plugins/pace-progress/pace.min.js"></script>
<!-- AdminLTE App -->
<script src="gestioncontratos/public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="gestioncontratos/public/dist/js/demo.js"></script>
</body>
</html>