<?php
include_once 'conexion.php';
$nome_temporario=$_FILES["arquivo"]["tmp_name"];
$nome_real=$_FILES["arquivo"]["name"];
$dest="../imagem/upload/".$nome_real;
copy($nome_temporario,$dest);
$dest1="imagem/upload/".$nome_real;
        $sql = "UPDATE persona SET pasaporte='$_POST[passport]',madre='$_POST[madre]',padre='$_POST[padre]',fotos='$dest1' where bi='$_POST[nombre]' ;";
        $rs = pg_query($objconexao, $sql);
        if($rs){
            echo "<script>
   window.alert('Datos Concluidos');
document.location='../persona.php';
 
</script>";
           
        }else{
             echo "no"; 
        }

?>