<?php
include_once 'conexion.php';
$sql = "INSERT INTO contactos(telefono1,telefono2,email,persona_bi) VALUES('$_POST[tel1]','$_POST[tel2]','$_POST[email]','$_POST[users]') ;";
$rs = pg_query($objconexao, $sql);
if($rs){

echo"<script>
    window.alert('Contacto adicionado con suceso');
document.location='../persona.php';
</script>";//Redireciona ao form de cadastro
}
else
{
echo"<script>
    window.alert('No adicionó, vuelve a intentar');
document.location='../contactos.php';
</script>";//Redireciona ao form de cadastro
}

?>