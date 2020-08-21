@extends('layout')

@section('content')
 


<div class="container-fluid pb-3">
  <h2>Empresas</h2>
<button type="button" class="btn btn-info btn-lg pull-left" data-toggle="modal" data-target="#myModal">Registro Empresa</button>
<br>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Empresas</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-6">
          <div class="form-group">
            <form action="../../Back-end/InsertDatos.php" method="post" id="validarpass" autocomplete="off">
              <h3 class="text-center text-primary">Empresa</h3>
              <br>
              <input type="text" name="Codigo_Empresa" id="COD_EMPRESA" class="form-control"
                placeholder="Codigo De La Empresa Ejem: 0819" required="true">
              <br>
              <input type="text" name="Nombre"  class="form-control" placeholder="Nombre De La Empresa" required="true">
              <br>
              <select id="TYP_EMPRESA" class="form-control" title="Tipo de Empresa" name="Tipo">
                <option value="Publica">Plublica</option>
                <option value="Privada">Privada</option>
              </select>
              <br>
          </div>
        </div>  
      </div>
      <div class="modal-footer">
        <input type="submit" value="Registrar Empresa" name="registrar" class="btn btn-primary btn-block">
        </div> 
    </div>
    </div>
    </div> 
    </div>
    </form>
  </div>
</div>
<br>
  <input class="form-control" id="myInput" type="text" placeholder="Search.."> 
  <br>
  <table class="table table-responsive table-bordered table-striped">
    <thead>
      <tr>
          <th>COD_EMPRESA </th>
          <th>NOM_EMPRESA</th>
          <th>TYP_EMPRESA</th>
          <th>USR_REGISTRO</th>
          <th>DATE_REGISTRO</th>
          <th>ACTION</th>
      </tr>
    </thead>
    <tbody id="myTable">    
        <tr>
          <td>1</td>
          <td>BAC</td>
          <td>PRIVADA</td>
          <td></td>
          <td>19/08/2020</td>
        <td>
        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-marker"></i></a>
        <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
        </td>
        </tr>
    </tbody>
  </table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                         <form action="update.php" method="post">
                            <input type="text" name="Codigo_Empresa" id="COD_EMPRESA" class="form-control"
                                placeholder="Codigo De La Empresa Ejem: 081900">
                            <br>
                            <input type="text" name="Nombre" id="NOM_EMPRESA" class="form-control" value="<?php //echo $nombre; ?>">
                            <br>
                            <select id="TYP_EMPRESA" class="form-control" title="Tipo De Empresa" name="Tipo">
                          <option value="Plublica">Plublica</option>
                          <option value="Privada">Privada</option>
                         </select>
                         <br>
                            <input type="text" name="Usuario" id="USR_REGISTRO" class="form-control" value="<?php //echo $nombre; ?>">
                            <br>
                           
                         <input type="text" name="Fecha_registro"   class="form-control" placeholder="Fecha De Registro" required="true">
                          <br>
                      
                  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning">Save changes</button>
      </div>
    </div>
  </div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

@endsection