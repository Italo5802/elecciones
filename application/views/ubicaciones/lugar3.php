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
<h2 style="color:#303240;">UBICACIONES DE IZQUIERDAS Y DERECHAS</h2>
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
          <h3 class="text-center" id="digni" style="color:#DC7F57;">Ideología</h3>
          <hr style="border-width: 2px; border-color: #303240">

          <h2 style="color:#CD1812;font-size:17px;">
            <span class="color-square"></span>&nbsp Izquierda
          </h2>
          <h2 style="color:#0064ED;font-size:17px;">
            <span class="color-square1"></span>&nbsp Derecha
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

    <?php if($izquierda): ?>
    <?php foreach($izquierda as $lugarTemporal): ?>
      var coordenadaTemporal = new google.maps.LatLng(<?php echo $lugarTemporal->latitud_el; ?>, <?php echo $lugarTemporal->longitud_el; ?>);
      // creacion de marcador
      var marcador1 = new google.maps.Marker({
        position: coordenadaTemporal,
        map: mapaPresidente,
        title: "<?php echo $lugarTemporal->nombre_el; ?> <?php echo $lugarTemporal->apellido_el; ?>\n Ideología: <?php echo $lugarTemporal->ideologia_el; ?> ",
        icon: {
          url: "<?php echo base_url(); ?>assets/images/marquer1.png",
          scaledSize: new google.maps.Size(31, 37) // Ajusta el tamaño del marcador aquí
        }
      });
    <?php endforeach; ?>
    <?php endif; ?>

    // Datos del mapa Asambleista

    <?php if($derecha): ?>
    <?php foreach($derecha as $lugarTemporal): ?>
      var coordenadaTemporal = new google.maps.LatLng(<?php echo $lugarTemporal->latitud_el; ?>, <?php echo $lugarTemporal->longitud_el; ?>);
      // creacion de marcador
      var marcador2 = new google.maps.Marker({
        position: coordenadaTemporal,
        map: mapaPresidente,
        title: "<?php echo $lugarTemporal->nombre_el; ?> <?php echo $lugarTemporal->apellido_el; ?>\n Ideología: <?php echo $lugarTemporal->ideologia_el; ?> ",
        icon: {
          url: "<?php echo base_url(); ?>assets/images/marq2.png",
          scaledSize: new google.maps.Size(30, 35) // Ajusta el tamaño del marcador aquí
        }
      });
    <?php endforeach; ?>
    <?php endif; ?>

  }
</script>
