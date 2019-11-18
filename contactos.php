<?php
session_start();
$titulo = "Editando";
include_once 'base/declaracion.php';
include_once 'base/navbar.php';
$usuario = $_SESSION['nomes'];
$id=$_SESSION['id'];
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            
        </div>
        <div class="col-md-6 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"> Contactos</h3>
                </div>
                <div class="panel-body">
                    <br>
                    <form role="form" action="bd/insert_contactos.php" method="POST">
                       
                        <div class="form-group">
                            <label>Contacto 1</label>
                            <input name="tel1" type="text"  class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Contacto 2</label>
                            <input type="text" name="tel2"   class="form-control"/>
                        </div>
                       <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" required   class="form-control"/>
                        </div>
                        <button  type="submit" class="btn btn-default"> Guardar</button>
                        <input name="users" value="<?php echo"$id";?>" type="password" class="form-control" style="display: none;"/>
                    </form>
                    <br>
                 
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'base/final.php';
?>