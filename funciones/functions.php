<?php

function hermanos() {
    include 'bd/conexion.php';
    $usuario = $_SESSION['nomes'];

    $sql = "SELECT * FROM persona WHERE  (padre=padre('$usuario') OR madre=madre('$usuario'));";
    $rs = pg_query($objconexao, $sql);

    if (pg_num_rows($rs) > 0) {
        echo "  <table   class=' table table-striped table-bordered table-hover'>
                    <thead  class='table-header' style='background-color: beige; color: black'>
                    <td>Hermanos de $usuario</td>
                </thead> <tbody>";
        while ($obj = pg_fetch_array($rs)) {
            if ($obj["nombre"] != $usuario) {
                ?>


                <tr>
                    <td> <?php echo "$obj[nombre]"." "."$obj[apellido]"; ?></td>
                </tr>
                <?php
            }
        }
        ?>

        </tbody>
        </table>
        <?php
        //}
    }
}

function tios() {
    include 'bd/conexion.php';
    $usuario = $_SESSION['nomes'];
    $padre=$_SESSION['padre'];
     $madre=$_SESSION['madre'];
        
    $sql = "SELECT * FROM persona WHERE  (padre=padre('$padre')OR madre=madre('$madre'));";
    $rs = pg_query($objconexao, $sql);

    if (pg_num_rows($rs) > 0) {
        echo "  <table   class=' table table-striped table-bordered table-hover'>
                    <thead  class='table-header' style='background-color: beige; color: black'>
                    <td>Tios de $usuario</td>
                </thead> <tbody>";
        while ($obj = pg_fetch_array($rs)) {
            if ($obj["nombre"] != $padre && $obj["nombre"] != $madre) {
            ?>


            <tr>
                <td> <?php echo "$obj[nombre]"." "."$obj[apellido]"; ?></td>
            </tr>
            <?php
        }
        }
        ?>

        </tbody>
        </table>
        <?php
       //}
    }
}

function abuelos() {
    include 'bd/conexion.php';
    $usuario = $_SESSION['nomes'];
$padre=$_SESSION['padre'];
    $madre=$_SESSION['madre'];
        
    $sql = "SELECT * FROM persona WHERE  (padre=padre('$padre')OR madre=madre('$madre'));";
    $rs = pg_query($objconexao, $sql);

    if (pg_num_rows($rs) > 0) {
        echo "  <table   class=' table table-striped table-bordered table-hover'>
                    <thead  class='table-header' style='background-color: beige; color: black'>
                    <td>Abuela </td>
                        <td>Abuelo </td>
                   
                </thead> <tbody>";
        while ($obj = pg_fetch_array($rs)) {
            if ($obj["nombre"] != $padre && $obj["nombre"] != $madre) {
            ?>


            <tr>
                <td> <?php echo "$obj[madre]"; ?></td>
                <td> <?php echo "$obj[padre]"; ?></td>
            </tr>
            <?php
            }
        }
        ?>

        </tbody>
        </table>
        <?php
        //}
    }
}
function idioma_persona(){
  
    include 'bd/conexion.php';
    $usuario = $_SESSION['nomes'];
    $id=$_SESSION['id'];
  
    $sql = "SELECT inombre_idioma FROM idioma_persona"
    . " WHERE persona_bi='$id' ;";
    $rs = pg_query($objconexao, $sql);
   
    if (pg_num_rows($rs) >0) {
        echo "  <table   class=' table table-striped table-bordered table-hover'>
                    <thead  class='table-header' style='background-color: beige; color: black'>
                    <td>Idiomas hablado por $usuario</td>
                </thead> <tbody>";
        while ($obj = pg_fetch_array($rs)) {
            ?>


            <tr>
                <td> <?php echo "$obj[inombre_idioma]"; ?></td>
            </tr>
            <?php
        }
        ?>

        </tbody>
        </table>
        <?php
        //}
    }
}
function contactos(){
        include 'bd/conexion.php';
    $usuario = $_SESSION['nomes'];
$id=$_SESSION['id'];
    $sql = "SELECT * FROM contactos WHERE  persona_bi='$id';";
    $rs = pg_query($objconexao, $sql);

    if (pg_num_rows($rs) > 0) {
        echo "  <table   class=' table table-striped table-bordered table-hover'>
                    <thead  class='table-header' style='background-color: beige; color: black'>
                    <td>Telefono 1 </td>
                        <td>Telefono 2 </td>
                        <td>Email </td>
                   
                </thead> <tbody>";
        while ($obj = pg_fetch_array($rs)) {
            ?>


            <tr>
                <td> <?php echo "$obj[telefono1]"; ?></td>
                <td> <?php echo "$obj[telefono2]"; ?></td>
                 <td> <?php echo "$obj[email]"; ?></td>
            </tr>
            <?php
        }
        ?>

        </tbody>
        </table>
        <?php
        //}
    }
}
?>