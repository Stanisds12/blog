<?php

if (!isset($_SESSION['acesso'])) {
    $_SESSION['acesso'] = null;
}
if ($_SESSION['acesso'] != "liberado") {
    ?>
    <nav class="navbar navbar-default navbar-static-top" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">El botón despliega cuando pulsado</span>   
                    <span class="icon-bar"></span>  
                    <span class="icon-bar"></span>  
                    <span class="icon-bar"></span>  
                </button>
                <a class="navbar-brand" href="../blog/index.php">REGISTRO FAMILIAR</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"> Entradas</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star" aria-hidden="true"> Favoritos</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"> Autores</a></li>


                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../blog/login.php">  <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Iniciar sesión</a></li>
                    <li><a href="../blog/registro.php"><span class="glyphicon glyphicon-record" aria-hidden="true"></span> Registro</a></li>



                </ul>
            </div>
        </div>

    </nav>
    <?php
} else {
    ?>

    <nav class="navbar navbar-default navbar-static-top" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">El botón despliega cuando pulsado</span>   
                    <span class="icon-bar"></span>  
                    <span class="icon-bar"></span>  
                    <span class="icon-bar"></span>  
                </button>
                <a class="navbar-brand" href="../blog/persona.php">REGISTRO FAMILIAR</a>
            </div>
            <?php 
             $id=$_SESSION['id'];
            include 'bd/conexion.php';
             $sql = "Select * From contactos WHERE persona_bi='$id' ;";
    $rs = pg_query($objconexao, $sql);
   
    if (pg_num_rows($rs) >0) {
            ?>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="editando.php"><span class="glyphicon glyphicon-edit" aria-hidden="true"> Editar</a></li>
                    <li><a href="idioma.php"><span class="glyphicon glyphicon-flag" aria-hidden="true"> Idioma</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"> Certificaciones</a></li>
                   

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../blog/admin/logOut.php">  <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Terminar sesión</a></li>

                </ul>
            </div>
            <?php 
    }else{
            ?>
             <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="editando.php"><span class="glyphicon glyphicon-edit" aria-hidden="true"> Editar</a></li>
                    <li><a href="idioma.php"><span class="glyphicon glyphicon-flag" aria-hidden="true"> Idioma</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"> Certificaciones</a></li>
                    <li><a href="contactos.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"> Contactos</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../blog/admin/logOut.php">  <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Terminar sesión</a></li>

                </ul>
            </div>
    <?php } ?>
        </div>

    </nav>





    <?php
}
?>