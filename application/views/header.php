<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>ELECCIONES</title>
		<!-- CDN-->
    <!--IMPORTACIÓN DE JQURY-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!--IMPORTACIÓN DE BOOSTRAP-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- IMPORTACION DE API KEY DE GOOGLE MAPS -->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8fkWjL9a6bHegZG8UDm3R0tTAOipLxHE&callback=initMap" type="text/javascript"></script>
    </script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

		<style >
		#fondo{
			background-color: #303240;
		}
		#barra1 {
		  position: relative;
		  background-image: url("<?php echo base_url(); ?>assets/images/fondologo.webp");
		  background-size: 100%;
		  display: flex;
		  justify-content: center;
		}

		#barra1::before {
		  content: "";
		  position: absolute;
		  top: 0;
		  left: 0;
		  width: 100%;
		  height: 100%;
		  background: rgba(255, 165, 0, 0.1);  /* Cambiar el valor alfa (0.5) según el nivel de transparencia deseado */
		}

		#cuerpo{
			background-color: #FFFFFF;
		}
		#navbarp{
			background-color: #DC7F57;
			margin-left:-15px;
			margin-right:-15px;
			color: #FFFFFF;
		}
		#estilo1{
			color: #FFFFFF;
			font-size: 18px;
		}
		#myCarousel{
			margin-top:-21px;
			margin-left:-14px;
			margin-right:-11px;
		}
		/* Estilos para el hover */
    .navbar-nav li a {
      transition: all 0.3s ease;
    }
		.navbar li:hover{
            background-color:#0D0C24;
        }

    .navbar-nav li a:hover {
      transform: translateY(-5px);
      color: #303240;
    }

		.animated-button {
		  position: relative;
		  overflow: hidden;
		  transition: all 0.3s ease;
		}

		.animated-button:before {
		  content: "";
		  position: absolute;
		  top: 0;
		  left: -100%;
		  width: 100%;
		  height: 100%;
		  background-color: rgba(255, 255, 255, 0.8);
		  transition: all 0.3s ease;
		  z-index: 1;
		}

		.animated-button:hover {
		  color: #303240;
		}

		.animated-button:hover:before {
		  left: 100%;
		}

		.animated-button:hover:after {
		  opacity: 1;
		}

		.custom-panel {
		  height: 280px; /* Cambia la altura según tus necesidades */
		  width: 340px; /* Cambia el ancho según tus necesidades */
		  transition: transform 0.3s ease;
		  border: 1px solid transparent;
		  box-shadow: 0 0 10px 3px #888888;
		}

			.custom-panel-container {
	      display: flex;
	      align-items: right;
	      justify-content: center;
	    }
			.custom-panel:hover {
      transform: scale(1.1);
    }

		.image-container {
      position: relative;
      display: inline-block;
      overflow: hidden;
    }

    .image-container img {
      transition: transform 0.3s ease;
    }

    .image-container:hover img {
      transform: scale(1.1);
    }
		.color-square {
		  display: inline-block;
		  width: 20px;
		  height: 20px;
			margin-left: 5px;
		  background-color: #ff0000; /* Reemplaza #ff0000 con el color HTML que desees */
		  margin-right: 5px; /* Ajusta el margen derecho según tu preferencia */
		}
		.color-square1 {
		  display: inline-block;
		  width: 20px;
		  height: 20px;
			margin-left: 5px;
		  background-color: #0064ED; /* Reemplaza #ff0000 con el color HTML que desees */
		  margin-right: 5px; /* Ajusta el margen derecho según tu preferencia */
		}
		.color-square2 {
		  display: inline-block;
		  width: 20px;
		  height: 20px;
			margin-left: 5px;
		  background-color: #FDBF2D; /* Reemplaza #ff0000 con el color HTML que desees */
		  margin-right: 5px; /* Ajusta el margen derecho según tu preferencia */
		}


		</style>
	</head>
	<body id="fondo">
    <div class="container " id="cuerpo">
      <div class="row" id="barra1">
				<div class="col-md-2">

				</div>
				<div class="col-md-8 text-center">
					<img  src="<?php echo base_url(); ?>assets/images/bandera.png" alt="logo" height="100px" >
					<h2 style="color:#FFFFFF;">	ELIGE A TUS REPRESENTANTES</h2>
				</div>
				<div class="col-md-2">

				</div>

      </div>

      <nav class="navbar navbar-default"  >
        <div  class="container-fluid"id="navbarp">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header" >
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
						<a class="navbar-brand" href="<?php echo site_url(); ?>" id="estilo1">
						  <i class="fas fa-home"></i>&nbsp INICIO
						</a>

          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
							<li class="dropdown" id="estilo1">
		          <a href="#"  class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="estilo1" ><div class="fas fa-user">

		          </div>&nbsp CANDIDATO <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo site_url(); ?>/candidatos/nuevo">Nuevo</a></li>
		            <li><a href="<?php echo site_url(); ?>/candidatos/index">Listado</a></li>
              </ul
              </li>
							<li>
							  <a href="<?php echo site_url(); ?>/ubicaciones/lugar" id="estilo1">
							    <i class="fas fa-map-marker-alt"></i>&nbsp CONOCER UBICACIONES
							  </a>
							</li>

            </ul>


          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
     </nav>
