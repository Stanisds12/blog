<?php
session_start();
include_once 'bd/conexion.php';

$usuario = $_SESSION['nomes'];
$id=$_SESSION['id'];
$titulo = "Terminando de conluir datos";
include_once 'base/declaracion.php';
include_once 'base/navbar.php';
 $sql = "SELECT * FROM persona where usuario='$usuario' ;";
 $rs = pg_query($objconexao, $sql);
 $nombre;
 if (pg_num_rows($rs) ==true) {
        while ($obj = pg_fetch_array($rs)) {
            $nombre=$obj["bi"];
        }
 }
?>

<div class="container">
    <div class="row">
        <div class="col-md-12"  >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> Editar datos</h3>
                </div>
                <div class="panel-body">

                    <!-- formulario de datos basicos-->
                    <form role="form" method="POST" action="bd/terminar_insertar_persona.php" enctype="multipart/form-data">
                        <div class="form-group">
                          
                        <div class="form-group">
                            <label>Pasaporte</label>
                            <input type="text" name="passport"  class="form-control"/>
                        </div>
                       
                      
                        <div class="form-group" >
                                <label>Madre</label>
                                <input name="madre" type="text"   class="form-control"/>
                            </div>
                        <div class="form-group" >
                                <label>Padre</label>
                                <input name="padre" type="text"   class="form-control"/>
                            </div>
                        <div class="form-group" >
                                <label>Foto</label>
                                <input id="arquivo" name="arquivo" type="file"   class="form-control"/>
                                <input name="nombre" value="<?php echo"$id";?>" type="text" style="display: none;"   class="form-control"/>
                            </div>
                            <button  type="submit" class="btn btn-default"> Guardar</button>
                        <br>
                       

                       
                    </form>
                </div>

            </div>
          
        </div>
    </div>
       
<?php
include_once 'base/final.php';
?>