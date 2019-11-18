<?php
$usuario = $_SESSION['nomes'];
?>
<nav class="navbar navbar-default navbar-static-top" >
            <div class="container">
                <div class="navbar-header">
                    <button  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">El botón despliega cuando pulsado</span>   
                        <span class="icon-bar"></span>  
                        <span class="icon-bar"></span>  
                        <span class="icon-bar"></span>  
                    </button>
                  
                    <h3 class="panel-title navbar-left navbar-brand" style="margin-left: 30px;"> 
                    <i class="fa fa-user"></i>  <?php echo "Bienvenido,  "."$usuario"; ?> 
                     </h3>
                  
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin/logOut.php">  <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Terminar sesión</a></li>
                        



                    </ul>
                </div>
            </div>

        </nav>