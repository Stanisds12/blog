<?php
session_start();
$titulo = "Editando";
include_once 'base/declaracion.php';
include_once 'base/navbar.php';
$usuario = $_SESSION['nomes'];
$id = $_SESSION['id'];

?>

<div class="container">
    <div class="row">
       
       
        <div class="col-md-12">
            
            <div class="panel panel-default">
 <div class="panel-heading">
            <h3 class="panel-title"> Introduce tus datos</h3>
        </div>
                <div class="panel-body">
                      
                    <form role="form" action="bd/update_persona.php" method="POST">

                        <div class="form-group">
                            <label>Estado Civil</label>
                            <select name="estado_civil"   class="form-control">
                                <option selected="selected" value="0">--Seleccionar--</option>
                                <option  value="Solteiro">Solteiro</option>
                                <option  value="Casado">Casado</option>
                                <option  value="Divorciado">Divorciado</option>
                            </select>
                        </div>

                        <br>
                    

                        <!--final formulario de datos basicos-->

                        <!-- formulario de contactos-->
                        <div  class="form-group">

                            <div class="form-group">
                                <label>Grado académico</label>
                                <select name="grau_academico" class="form-control" >
                                    <option selected="selected" value="0">--Seleccionar--</option>
                                    <?php
                                    $sql = "SELECT grau_academico FROM grau_academico ;";
                                    $rs = pg_query($objconexao, $sql);
                                    if ($rs) {
                                        if (pg_num_rows($rs) > 0) {
                                            while ($obj = pg_fetch_array($rs)) {
                                                ?>
                                                <option value="<?php echo $obj["grau_academico"]; ?>"> <?php echo $obj["grau_academico"]; ?></option>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Religión</label>
                                <select name="nombre_religion" class="form-control" >
                                    <option selected="selected" value="0">--Seleccionar</option>
                                    <?php
                                    $sql = "SELECT nombre_religion FROM religion ;";
                                    $rs = pg_query($objconexao, $sql);
                                    if ($rs) {
                                        if (pg_num_rows($rs) > 0) {
                                            while ($obj = pg_fetch_array($rs)) {
                                                ?>
                                                <option value="<?php echo $obj["nombre_religion"]; ?>"> <?php echo $obj["nombre_religion"]; ?></option>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group" >
                                <label>Usuario</label>
                                <input name="usuario" type="text"  class="form-control"/>
                            </div>
                            <div class="form-group" >
                                <label>Contraseña</label>
                                <input name="senha" type="password" class="form-control"/>
                            </div>
                            <br>
                            <center><div class="form-group">
                                    <button type="submit" class="btn btn-success">Enviar datos</button>
                                    <button type="reset" class="btn btn-default">Limpiar los campos</button>
                                    <input name="nombre" type="text" value="<?php echo"$id";?>" class="form-control" style="display: none;" />

                                </div></center>

                        </div>

                    </form>
                </div>
            </div>
        </div>
 
    </div>
</div>

<?php
       
include_once 'base/final.php';
?>