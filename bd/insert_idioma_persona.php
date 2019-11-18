<?php
session_start();
include_once 'conexion.php';
$id=$_SESSION['id'];
$sql = "INSERT INTO idioma_persona(inombre_idioma,persona_bi) VALUES('$_POST[idioma]','$id') ;";
$rs = pg_query($objconexao, $sql);
if($rs){

echo"<script>
    window.alert('Idioma adicionado con suceso');
document.location='../idioma.php';
</script>";//Redireciona ao form de cadastro
}
else
{
echo"<script>
    window.alert('No adicionó, vuelve a intentar');
document.location='../idioma.php';
</script>";//Redireciona ao form de cadastro
}

?>