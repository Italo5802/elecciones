

<h1 style="color:#DC7F57;">UBICACIONES  DE LOS CANDIDATOS</h1>
<hr style="border-width: 2px; border-color: #DC7F57;">
<div class="row">
  <div class="col-md-3">
    <br>
    <br>
    <br>
    <br>
    <button type="button" class="btn btn-danger animated-button text-center" onclick="mostrarPresidente();" style="font-size: 16px; width: 100%;">Reporte Presidentes</button>
    <br>
    <br>
    <button type="button" class="btn btn-primary animated-button text-center" onclick="mostrarAsambleista();" style="font-size: 16px; width: 100%;">Reporte Asambleístas Nacionales</button>
    <br>
    <br>
    <button type="button" class="btn btn-warning animated-button text-center" onclick="mostrarConsejero();" style="font-size: 16px; width: 100%;">Reporte Asambleístas Provinciales</button>
    <br>
    <br>
    <a href="<?php echo site_url(); ?>/ubicaciones/lugar2" class="btn btn-success animated-button text-center" role="button" style="font-size: 18px; width: 100%;">REPORTE GENERAL</a>
    <br>
    <br>
    <a href="<?php echo site_url(); ?>/ubicaciones/lugar3" class="btn btn-success animated-button text-center" role="button" style="font-size: 14px; width: 100%;"> IZQUIERDAS Y DERECHAS</a>
    <br>
    <br>
</div>


  <div class="col-md-9">
    <div id="mapa1">
      <h2 class="text-center" style="color:#CC3F3B;">Presidentes</h2>
      <div id="mapaPresidente" style="height:500px; width:98%; border:1px solid black;"></div>
    </div>

    <div id="mapa2">
      <h2 class="text-center" style="color:#2B669A">Asambleístas Nacionales</h2>
      <div id="mapaAsambleista" style="height:500px; width:98%; border:1px solid black;"></div>
    </div>

    <div id="mapa3">
      <h2 class="text-center" style="color:#ED9C29;">Asambleístas Provinciales</h2>
      <div id="mapaConsejero" style="height:500px; width:98%; border:1px solid black;"></div>
    </div>

  </div>

</div>
<br>
<br>

<style type="text/css">
   #mapa1{
     display: block;
   }
   #mapa2{
     display: none;
   }
   #mapa3{
     display: none;
   }

</style>
<script type="text/javascript">
   function mostrarPresidente(){
     document.getElementById('mapa1').style.display = 'block';
     document.getElementById('mapa2').style.display = 'none';
     document.getElementById('mapa3').style.display = 'none';
   }
   function mostrarAsambleista(){
     document.getElementById('mapa1').style.display = 'none';
     document.getElementById('mapa2').style.display = 'block';
     document.getElementById('mapa3').style.display = 'none';
   }
   function mostrarConsejero(){
     document.getElementById('mapa1').style.display = 'none';
     document.getElementById('mapa2').style.display = 'none';
     document.getElementById('mapa3').style.display = 'block';
   }
</script>

<script type="text/javascript">
function initMap(){
     var centro = new google.maps.LatLng(-0.18659107231077032, -78.46221628782364);
     var mapaPresidente= new google.maps.Map(
       document.getElementById('mapaPresidente'),
       {
         center:centro,
         zoom: 7,mapTypeId:google.maps.MapTypeId.BASIC
       }
     );
     <?php if($presidente): ?>
       <?php foreach($presidente as $lugarTemporal): ?>
       var coordenadaTemporal = new google.maps.LatLng(<?php echo $lugarTemporal->latitud_el; ?>, <?php echo $lugarTemporal->longitud_el; ?>);
       // creacion de marcador
       var marcador1=new google.maps.Marker({
            position: coordenadaTemporal,
            map:mapaPresidente,
            title: "<?php echo $lugarTemporal->nombre_el; ?> <?php echo $lugarTemporal->apellido_el; ?>\n Ideología <?php echo $lugarTemporal->ideologia_el; ?>\n Movimiento <?php echo $lugarTemporal->movimiento_el; ?>\n <?php echo $lugarTemporal->profesion_el; ?>\n Tiene <?php echo $lugarTemporal->edad_el; ?> años",
            icon:"<?php echo base_url(); ?>assets/images/marquer1.png"
          });
       <?php endforeach; ?>
     <?php endif; ?>

     // creacion del mapa ASAMBLESITAS
     var centro2 = new google.maps.LatLng(-0.8336862410973235, -78.66725198807563);
     var mapaAsambleista= new google.maps.Map(
       document.getElementById('mapaAsambleista'),
       {
         center:centro2,
         zoom: 7,mapTypeId:google.maps.MapTypeId.BASIC
       }
     );
     <?php if($asambleista): ?>
       <?php foreach($asambleista as $lugarTemporal): ?>
       var coordenadaTemporal2 = new google.maps.LatLng(<?php echo $lugarTemporal->latitud_el; ?>, <?php echo $lugarTemporal->longitud_el; ?>);
       // creacion de marcador
       var marcador2 = new google.maps.Marker({
          position: coordenadaTemporal2,
          map: mapaAsambleista,
          title: "<?php echo $lugarTemporal->nombre_el; ?> <?php echo $lugarTemporal->apellido_el; ?>\n Ideología <?php echo $lugarTemporal->ideologia_el; ?>\n Movimiento <?php echo $lugarTemporal->movimiento_el; ?>\n <?php echo $lugarTemporal->profesion_el; ?>\n Tiene <?php echo $lugarTemporal->edad_el; ?> años",
          icon: {
            url: "<?php echo base_url(); ?>assets/images/marq2.png",
            scaledSize: new google.maps.Size(34, 39) // Ajusta el tamaño del marcador aquí
          }
        });
       <?php endforeach; ?>
     <?php endif; ?>
     // fin de asambleista

     // Creacion del mapa consejero
     var centro3 = new google.maps.LatLng(-0.8336862410973235, -78.66725198807563);
     var mapaConsejero= new google.maps.Map(
       document.getElementById('mapaConsejero'),
       {
         center:centro3,
         zoom: 7,mapTypeId:google.maps.MapTypeId.BASIC
       }
     );
     <?php if($consejero): ?>
       <?php foreach($consejero as $lugarTemporal): ?>
       var coordenadaTemporal3 = new google.maps.LatLng(<?php echo $lugarTemporal->latitud_el; ?>, <?php echo $lugarTemporal->longitud_el; ?>);
       // creacion de marcador
       var marcador3=new google.maps.Marker({
            position: coordenadaTemporal3,
            map:mapaConsejero,
            title: "<?php echo $lugarTemporal->nombre_el; ?><?php echo $lugarTemporal->apellido_el; ?>\n Ideología <?php echo $lugarTemporal->ideologia_el; ?>\n Movimiento <?php echo $lugarTemporal->movimiento_el; ?>\n <?php echo $lugarTemporal->profesion_el; ?>\n Tiene <?php echo $lugarTemporal->edad_el; ?> años",
            icon: {
              url: "<?php echo base_url(); ?>assets/images/marquer2.png",
              scaledSize: new google.maps.Size(34, 39) // Ajusta el tamaño del marcador aquí
            }
          });
       <?php endforeach; ?>
     <?php endif; ?>

   }//Cierre de initMap
</script>
