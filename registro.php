<?php
$titulo = "Registro";
include_once 'base/declaracion.php';
include_once 'base/navbar.php';
include_once 'bd/conexion.php';
?>

<div class="container" >
    <div class="jumbotron">
        <h1>FORMULARIO DE REGISTRO</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12"  >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> Introduce tus datos personales</h3>
                </div>
                <div class="panel-body">

                    <!-- formulario de datos basicos-->
                    <form role="form" id="dados" method="POST" action="bd/insert_persona.php">
                        <div class="form-group">
                            <label>Nombre </label>
                            <input type="text" name="nombre" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" name="apellido" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Carneé</label>
                            <input type="text" name="bi" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Sexo</label>
                            <select name="sexo"  class="form-control">
                                <option selected="selected" value="0">--Seleccionar--</option>
                                <option  value="M">M</option>
                                <option  value="F">F</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Estado Civil</label>
                            <select name="estado_civil"  class="form-control">
                                <option selected="selected" value="0">--Seleccionar--</option>
                                <option  value="Solteiro">Solteiro</option>
                                <option  value="Casado">Casado</option>
                                <option  value="Divorciado">Divorciado</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Fecha de nacimiento</label>
                            <input name="nascimento" type="date" class="form-control"/>
                        </div>
                        <br>
                        <center><div class="form-group">

                                <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#demo" aria-expanded="true" aria-controls="demo">
                                    Siguiente paso
                                </button>


                            </div></center>

                        <!--final formulario de datos basicos-->

                        <!-- formulario de contactos-->
                        <div id="demo" class="collapse ">

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
                                    <option selected="selected" value="0">--Seleccionar--</option>
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
                            <div class="form-group">
                                <label>País de nacimiento</label>
                              <select name="nombre_pais" class="form-control" >
                                    <option selected="selected" value="0">--Seleccionar--</option>
                                    <?php
                                    $sql = "SELECT nombre_pais FROM pais ;";
                                    $rs = pg_query($objconexao, $sql);
                                    if ($rs) {
                                        if (pg_num_rows($rs) > 0) {
                                            while ($obj = pg_fetch_array($rs)) {
                                                ?>
                                                <option value="<?php echo $obj["nombre_pais"]; ?>"> <?php echo $obj["nombre_pais"]; ?></option>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group" >
                                <label>Usuario</label>
                                <input name="usuario" type="text" class="form-control"/>
                            </div>
                             <div class="form-group" >
                                <label>Contraseña</label>
                                <input name="senha" type="password" class="form-control"/>
                            </div>
                            <br>
                            <center><div class="form-group">
                                    <button type="submit" class="btn btn-success">Enviar datos</button>
                                    <button type="reset" class="btn btn-default">Limpiar los campos</button>
                                    
                                </div></center>
                          
                        </div>
                        
                    </form>
                </div>

            </div>
          
        </div>
    </div>

    <?php
    include_once 'base/final.php';
    ?>