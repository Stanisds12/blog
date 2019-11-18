<?php
$titulo = "Login";
include_once 'base/declaracion.php';
include_once 'base/navbar.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"> Iniciar Sesión</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="bd/login_admin.php" method="POST">
                        <div  class="form-group">
                            <center> <img id="user" src="imagem/user.png"></center>
                        </div>
                        <div class="form-group">
                            <label>Usuario</label>
                            <input name="usuario" type="text" onblur="taVacio(this)" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="senha"  onblur="taVacio(this)" class="form-control"/>
                        </div>
                        <button  type="submit" class="btn btn-default"> Login</button>
                        <input name="users" value="" type="password" class="form-control" style="display: none;"/>
                    </form>
                  
                </div>
            </div>
 
        </div>
     
    </div>
</div>