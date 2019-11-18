<form role="form" action="bd/insert_religion.php" method="POST">
    <div class="table-responsive">
<table id="tbl" style="border: none 2px;" class=" table table-striped table-bordered table-hover">
    <thead class="table-header">
        <tr>
            <th class="th">
    <p>Cadastro de religión</p>
</th>
<th class="th">
<p>Campos</p>
</th>
</tr>
</thead>
<tbody>
    <tr>
        <td>
            Religión:
        </td>
        <td>
            <input onblur="taVacio(this,'religion')" onfocus="llenando('religion')" type="text" name="nombre" class="form-control" placeholder="Escriba el nombre de la religion">
        </td>
    </tr>
    <tr>
        <td>

            <button  class="btn btn-default" > Guardar</button>

        </td>

        <td>
            <button class="btn btn-default" type="reset">Limpiar</button>
        </td>
    </tr>
</tbody>

</table>
<div id="religion" class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Aviso!</strong> No dejes el campo vacío,por favor llene!.
</div>
    </div>
</form>