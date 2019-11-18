
<div class="panel-group grupoAdd" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div id="1" class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a id="idi" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          IDIOMA
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
       <?php include_once 'idioma.php'; ?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div id="2" class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        RELIGION
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?php include_once 'religion.php'; ?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div  class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          PAÍS
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
       <?php include_once 'pais.php'; ?>
      </div>
    </div>
  </div>
     <div class="panel panel-default">
    <div  class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          GRADO ACADÉMICO
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
       <?php include_once 'grado_academico.php'; ?>
      </div>
    </div>
  </div>
     <div class="panel panel-default">
    <div  class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         CERTIFICACIÓN
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
       <?php include_once 'certificacion.php'; ?>
      </div>
    </div>
  </div>
</div>