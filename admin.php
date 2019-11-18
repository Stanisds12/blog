<?php
session_start();
 if(!isset($_SESSION['acesso'] )){
		$_SESSION['acesso']=null;  
	  }
	  if($_SESSION['acesso'] == "liberado"){
$usuario= $_SESSION['nomes'];
$titulo = "Administrador";
include_once 'base/declaracion.php';
include_once 'base/navbar_adm.php';

?>


<div class="container">

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center"> Area del administrador</h3>
               
            </div>
            <div  class="panel-body">
 
   <?php include_once 'base/gestor.php';?>
          

            </div>
        </div>
    </div>
</div>







<?php
include_once 'base/final.php';
}else{
 
 echo"
     <script> alert('No puedes acceder a esta pagina sin hacer el Login');
     document.location='login2.php'; </script>";
}
?>