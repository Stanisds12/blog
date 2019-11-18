 <?php
  include_once 'base/plantilla_adm.php';
 if(!isset($_REQUEST["p"])){
	 include "admin/inicio_adm.php";
 }else{
	 switch($_REQUEST["p"]){
	case 'Adicionar':
	include "admin/estrutura_adicionar.php";
	
	break;
	case 'Consultar':
	include ".php";
	break;
	case 'info':
	include "admin/informacion.php";
	break;
	case 'inicio':
	 include "admin/inicio_adm.php";
	break;
	 }
 }
 
include_once 'base/plantilla_adm.php';

			 ?>