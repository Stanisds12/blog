<?php
session_start();
include_once 'bd/conexion.php';

$usuario = $_SESSION['nomes'];
$id=$_SESSION['id'];
$titulo = "Idiomas";
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
                    <h3 class="panel-title"> Seleccionar idiomas</h3>
                </div>
                <div class="panel-body">

                    <!-- formulario de datos basicos-->
                    <form role="form" method="POST" action="bd/insert_idioma_persona.php" enctype="multipart/form-data">
                         <div class="form-group">
                                <label>Idioma</label>
                                <select name="idioma" class="form-control" >
                                    <option selected="selected" value="0">--Seleccionar</option>
                                    <?php
                                    $sql = "SELECT nombre_idioma FROM idioma ;";
                                    $rs = pg_query($objconexao, $sql);
                                    if ($rs) {
                                        if (pg_num_rows($rs) > 0) {
                                            while ($obj = pg_fetch_array($rs)) {
                                                ?>
                                                <option value="<?php echo $obj["nombre_idioma"]; ?>"> <?php echo $obj["nombre_idioma"]; ?></option>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </select>
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