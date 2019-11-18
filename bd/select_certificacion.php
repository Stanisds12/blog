<?php
include_once 'conexion.php';
$sql = "SELECT count(id_certificacion) AS registo FROM certificacion ;";
$rs = pg_query($objconexao, $sql);
if ($rs) {
    if (pg_num_rows($rs) > 0) {
        while ($obj = pg_fetch_array($rs)) {

            echo $obj["registo"];
        }
    }
}
?>