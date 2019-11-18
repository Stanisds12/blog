<br>
<div id="geral" class="row text-center">
    <div class="col-md-4" id="adm_registrado">
        <h2><i class="fa fa-inbox" aria-hidden="true"></i></h2>
        <h3>Registrados</h3>
        <h4>
  <?php include_once 'bd/select_registados.php'; ?>
            
        </h4>
    </div>
    <div class="col-md-4" id="adm_certficados">
        <h2><i class="fa fa-flag-o"></i></h2>
        <h3>País</h3>
         <h4> <?php include_once 'bd/select_pais.php'; ?> </h4>
    </div>
    <div class="col-md-4" id="adm_ok">
        <h2><i class="fa fa-newspaper-o"></i></h2>
        <h3>Certificaciones</h3>
         <h4><?php include_once 'bd/select_certificacion.php'; ?></h4>
    </div>
</div>
