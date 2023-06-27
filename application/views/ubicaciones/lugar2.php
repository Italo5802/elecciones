<style >
  #colores{
    border:solid;
    margin-right: -3px;
    border-color: #DC7F57;
  }
  #digni{
    margin-top: 0%;
    margin-bottom: -5%;
  }

</style>
<h2 style="color:#303240;">ESTAS SON LAS UBICACIONES DE TODOS LOS CANDIDATOS</h2>
<hr style="border-width: 2px; border-color: #303240;">
<a href="<?php echo site_url(); ?>/ubicaciones/lugar" class="btn btn-success" role="button" >volver</a>
<div class="row">

  <div class="col-md-9">
    <div id="mapaPresidente" style="height:500px; width:100%; border:1px solid black;"></div>
    <br>
    <br>
  </div>
  <br>
  <div class="col-md-3" >
    <div class="panel panel-default">
      <div class="panel-body">
        <div >
          <h3 class="text-center" id="digni" style="color:#DC7F57;">Dignidades</h3>
          <hr style="border-width: 2px; border-color: #303240">

          <h2 style="color:#CD1812;font-size:17px;">
            <span class="color-square"></span>&nbsp Presidentes
          </h2>
          <h2 style="color:#0064ED;font-size:17px;">
            <span class="color-square1"></span>&nbsp Asambleístas Nacionales
          </h2>
          <h2 style="color:#FDBF2D;font-size:16px;">
            <span class="color-square2"></span>&nbsp Asambleístas Provinciales
          </h2>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function initMap(){
    // creacion del mapa Presidente
    var centro = new google.maps.LatLng(-0.18659107231077032, -78.46221628782364);
    var mapaPresidente = new google.maps.Map(
      document.getElementById('mapaPresidente'),
      {
        center: centro,
        zoom: 7,
        mapTypeId: google.maps.MapTypeId.BASIC
      }
    );

    <?php if($presidente): ?>
    <?php foreach($presidente as $lugarTemporal): ?>
      var coordenadaTemporal = new google.maps.LatLng(<?php echo $lugarTemporal->latitud_el; ?>, <?php echo $lugarTemporal->longitud_el; ?>);
      // creacion de marcador
      var marcador1 = new google.maps.Marker({
        position: coordenadaTemporal,
        map: mapaPresidente,
        title: "<?php echo $lugarTemporal->nombre_el; ?> <?php echo $lugarTemporal->apellido_el; ?>\n Candidato a <?php echo $lugarTemporal->dignidad_el; ?>\n Ideología <?php echo $lugarTemporal->ideologia_el; ?>\n Movimiento <?php echo $lugarTemporal->movimiento_el; ?>\n <?php echo $lugarTemporal->profesion_el; ?>\n Tiene <?php echo $lugarTemporal->edad_el; ?> años",
        icon: {
          url: "<?php echo base_url(); ?>assets/images/marquer1.png",
          scaledSize: new google.maps.Size(31, 37) // Ajusta el tamaño del marcador aquí
        }
      });
    <?php endforeach; ?>
    <?php endif; ?>

    // Datos del mapa Asambleista

    <?php if($asambleista): ?>
    <?php foreach($asambleista as $lugarTemporal): ?>
      var coordenadaTemporal = new google.maps.LatLng(<?php echo $lugarTemporal->latitud_el; ?>, <?php echo $lugarTemporal->longitud_el; ?>);
      // creacion de marcador
      var marcador2 = new google.maps.Marker({
        position: coordenadaTemporal,
        map: mapaPresidente,
        title: "<?php echo $lugarTemporal->nombre_el; ?> <?php echo $lugarTemporal->apellido_el; ?>\n Candidato a <?php echo $lugarTemporal->dignidad_el; ?>\n Ideología <?php echo $lugarTemporal->ideologia_el; ?>\n Movimiento <?php echo $lugarTemporal->movimiento_el; ?>\n <?php echo $lugarTemporal->profesion_el; ?>\n Tiene <?php echo $lugarTemporal->edad_el; ?> años",
        icon: {
          url: "<?php echo base_url(); ?>assets/images/marq2.png",
          scaledSize: new google.maps.Size(30, 35) // Ajusta el tamaño del marcador aquí
        }
      });
    <?php endforeach; ?>
    <?php endif; ?>

    // Datos del mapa consejero
    <?php if($consejero): ?>
      <?php foreach($consejero as $lugarTemporal): ?>
      var coordenadaTemporal3 = new google.maps.LatLng(<?php echo $lugarTemporal->latitud_el; ?>, <?php echo $lugarTemporal->longitud_el; ?>);
      // creacion de marcador
      var marcador3=new google.maps.Marker({
           position: coordenadaTemporal3,
           map:mapaPresidente,
           title: "<?php echo $lugarTemporal->nombre_el; ?> <?php echo $lugarTemporal->apellido_el; ?>\n Candidato a <?php echo $lugarTemporal->dignidad_el; ?>\n Ideología <?php echo $lugarTemporal->ideologia_el; ?>\n Movimiento <?php echo $lugarTemporal->movimiento_el; ?>\n <?php echo $lugarTemporal->profesion_el; ?>\n Tiene <?php echo $lugarTemporal->edad_el; ?> años",
           icon: {
             url: "<?php echo base_url(); ?>assets/images/marquer2.png",
             scaledSize: new google.maps.Size(30, 35) // Ajusta el tamaño del marcador aquí
           }
         });
      <?php endforeach; ?>
    <?php endif; ?>

  }
</script>
