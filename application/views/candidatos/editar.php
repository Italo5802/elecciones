<center><h3>EDITAR CANDIDATO</h3></center>
<form class="" action="<?php echo site_url(); ?>/candidatos/procesarActualizacion" method="post">
  <div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-10 text-center" >
      <!-- creacion de row para labels -->
      <div class="panel panel-warning">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <input type="hidden" name="id_el" id="id_el" class="form-control" value="<?php echo $editarCandidato->id_el; ?>" readonly >
                <label for="">Dignidad:</label><br>
                <select name="dignidad_el" id="dignidad_el" class="form-control" required>
                  <option value="<?php echo $editarCandidato->dignidad_el; ?>" > <?php echo $editarCandidato->dignidad_el; ?></option>
                  <option value="Presidente/a">Presidente/a</option>
                  <option value="Asambleista Nacional">Asambleísta Nacional</option>
                  <option value="Asambleista Provincial">Asambleísta Provincial</option>
                </select>

                <br>
                <label for="">Ideología:</label><br>
                <select  class="form-select form-control" name="ideologia_el"  required>
                    <option value="<?php echo $editarCandidato->ideologia_el; ?>" > <?php echo $editarCandidato->ideologia_el; ?></option>
                    <option value="Izquierda">Izquierda</option>
                    <option value="Derecha">Derecha</option>
                    <br/>
                </select>
                <br>
                <label for="">Movimiento:</label><br>
                <input type="text" placeholder="Ingrese su Movimiento" class="form-control" name="movimiento_el" value="<?php echo $editarCandidato->movimiento_el; ?>" required>
                <br>
                 <label for="">Nombre:</label><br>
                 <input type="text" placeholder="Ingrese su nombre" class="form-control" name="nombre_el" value="<?php echo $editarCandidato->nombre_el; ?>"  required>
                 <br>
                 <label for="">Apellido:</label><br>
                  <input type="text" placeholder="Ingrese su Apellido" class="form-control" name="apellido_el" value="<?php echo $editarCandidato->apellido_el; ?>" required>
                  <br>

              </div>
              <div class="col-md-6">
                <label for="">Profesion:</label><br>
                <input type="text" placeholder="Ingrese la profesión" class="form-control" name="profesion_el" value="<?php echo $editarCandidato->profesion_el; ?>" required>
                <br>
                <label for="">Edad:</label><br>
                <input type="number" placeholder="Ingrese su edad" class="form-control" name="edad_el" value="<?php echo $editarCandidato->edad_el; ?>" required>
                <br>
                <label for="">Latitud:</label><br>
                <input type="text" placeholder="Seleccione la ubicación en el mapa" class="form-control" name="latitud_el" id="latitud_el" value="<?php echo $editarCandidato->latitud_el; ?>" readonly required>
                <br>
                <label for="">Longitud:</label><br>
                <input type="text" placeholder="Seleccione la ubicación en el mapa" class="form-control" name="longitud_el" id="longitud_el" value="<?php echo $editarCandidato->longitud_el; ?>" readonly required>
              </div>
          </div>
          <br>
          <div class="">
            <div class="col-md-12">
              <div id="mapaUbicacion" style="height:350px; with:100%; border:2px solid black;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-1">

    </div>
  </div>
  <div class="row">
      <div class="col-md-12 text-center">
        <button type="submit" name="button" class="btn btn-primary">  Editar</button>
          <a href="<?php echo site_url(); ?>/candidatos/nuevo" class="btn btn-danger">Cancelar
          </a>
      </div>
    </div>
    <br><br><br>
</form>
<script type="text/javascript">
  function initMap(){
    var centro = new google.maps.LatLng(-1.6846626939153513, -78.66390270881963);
    var mapa1= new google.maps.Map(
      document.getElementById('mapaUbicacion'),
      {
        center:centro,
        zoom: 7,mapTypeId:google.maps.MapTypeId.BASIC
      }
    );
    var marcador=new google.maps.Marker({
      position:centro,
      map:mapa1,
      title:"Seleccione la direccion",
      icon: {
        url: "<?php echo base_url(); ?>assets/images/mapp1.png",
        scaledSize: new google.maps.Size(42, 50) // Ajusta el tamaño del marcador aquí
      },
      draggable:true
    });
    google.maps.event.addListener(marcador,
      'dragend',function(){
      //alert("Se termino el Drag");
      document.getElementById('latitud_el').value=
      this.getPosition().lat();
      document.getElementById('longitud_el').value=
      this.getPosition().lng();
      });
  }
</script>
