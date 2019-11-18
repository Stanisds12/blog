<?php
session_start();
include_once 'bd/conexion.php';
include_once 'funciones/functions.php';
?>
<?php
$usuario = $_SESSION['nomes'];
//$id=$_SESSION['id'];
$titulo = "$usuario";
include_once 'base/declaracion.php';
include_once 'base/navbar.php';
$sql = "SELECT * FROM persona where nombre='$usuario' ;";
$rs = pg_query($objconexao, $sql);
$nombre;
if (pg_num_rows($rs) == true) {
    while ($obj = pg_fetch_array($rs)) {
        $nombre = $obj["nombre"] . " " . $obj["apellido"];
        ?>

        <div class="container">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center"> Datos De <?php echo "$nombre" ?></h3>

                    </div>
                    <div  class="panel-body">
                        <center> <div>
                            <img id="foto_persona" src="<?php echo "$obj[fotos]"; ?>" alt="" class="img-circle text-center">
                            </div></center>
                         <div id="taq" class="form-group">
                        <table id="tb"    class=" table table-striped table-bordered table-hover">
                            <thead  class="table-header" style="background-color: beige; color: black">
                            <td>Nombre</td>
                             <td>Estado Civil</td>
                            <td>Pais</td>

                            <td>Grado Académico</td>
                            <td>Padre</td>
                            <td>Madre</td>
                            <td>Religión</td>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <?php echo "$nombre"; ?></td>
                                    <td> <?php echo "$obj[estado_civil]"; ?></td>
                                    <td> <?php echo "$obj[nombre_pais]"; ?></td>

                                    <td> <?php echo "$obj[grau_academico]"; ?></td>

                                    <td> <?php echo "$obj[padre]"; ?></td>
                                    <td> <?php echo "$obj[madre]"; ?></td>
                                    <td> <?php echo "$obj[nombre_religion]"; ?></td>
                                </tr>

                            </tbody>

                        </table>
                         </div>
                        <?php echo contactos();?>
                        <?php echo idioma_persona(); ?>
                        <?php echo hermanos(); ?>
                        <?php echo tios(); ?>
                        <?php echo abuelos(); ?>

                    </div>
                </div>
            </div>
        </div>

        <?php
    }
}
include_once 'base/final.php';
?>