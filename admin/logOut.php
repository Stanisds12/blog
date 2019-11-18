<?php
session_start();
$_SESSION['nomes'] = null;
$_SESSION['acesso']=null;
session_destroy();
 echo"<script> document.location='../login.php'; </script>"; 
?>