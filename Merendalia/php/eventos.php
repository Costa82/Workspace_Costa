<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Eventos</title>
<link type="text/css" rel="stylesheet" href="../css/font-awesome.css" />

<script>
    var rutacss1 = "../css/main.css?" + Math.random();
    document.write('<link rel="stylesheet" href="' + rutacss1 + '" type="text/css" media="screen" />'); 
</script>

<link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One'
	rel='stylesheet' type='text/css' />
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah"
	rel="stylesheet">

<link href="../apple-touch-icon.png" rel="apple-touch-icon" />
<link href="../apple-touch-icon-152x152.png" rel="apple-touch-icon"
	sizes="152x152" />
<link href="../apple-touch-icon-167x167.png" rel="apple-touch-icon"
	sizes="167x167" />
<link href="../apple-touch-icon-180x180.png" rel="apple-touch-icon"
	sizes="180x180" />
<link href="../icon-hires.png" rel="icon" sizes="192x192" />
<link href="../icon-normal.png" rel="icon" sizes="128x128" />

<script src="../jquery/jquery-3.1.1.min.js"></script>
<script src="../jquery/zoom_fancybox.js"></script>

<!-- Add jQuery library -->
<script type="text/javascript"
	src="https://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add fancyBox -->
<script>
    var rutacss2 = "../fancybox/source/jquery.fancybox.css?v=2.1.7?" + Math.random();
    document.write('<link rel="stylesheet" href="' + rutacss2 + '" type="text/css" media="screen" />'); 
</script>
<script type="text/javascript"
	src="../fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet"
	href="../fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5"
	type="text/css" media="screen" />
<script type="text/javascript"
	src="../fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript"
	src="../fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet"
	href="../fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7"
	type="text/css" media="screen" />
<script type="text/javascript"
	src="../fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script src="../jquery/jquery_menuMoviles_desplegable.js"></script>

</head>
<body>
	<header>

<!-- 		<div class="titulo_movil"> -->
<!-- 			<a href='../index.php' title='Inicio'><img -->
<!-- 				src='../img/merendalia_logotipo_RGB-01.png' alt='Merendalia' /></a> -->
<!-- 		</div> -->

		<nav>
          <?php include_once("menuNav.php");?>		
      	</nav>
	</header>

	<div class="explicacion_galeria">
		<p>En Merendalia nos esforzamos por organizar eventos que realmente
			merezcan la pena, ¡solo aptos para personas disfrutonas! ¡mira los
			que te hemos preparado!</p>
		</br>
	</div>

	<div class="contenedor_eventos">

		<div class="evento_principal">

			<!-- <h3>NOMBRE EVENTO</h3>
    
    			<div class="explicacion_evento">
    				<p></p>
    			</div>
    
    			<img src='../img/Imagen_alargada'
    				title='' class="img_movil" /> <img
    				src='../img/Imagen_apaisada' title=''
    				class="img_ordenador" /> -->

		</div>

	</div>

	<h3 class="eventos_pasados">EVENTOS PASADOS</h3>

	<div class="contenedor_eventos_secundarios">

		<div class="evento_secundario">

			<h3>TIEMPO DE VENDIMIA</h3>

			<div class="explicacion_evento">
				<p>Os traemos el evento Tiempo de Vendimia. Con él hemos querido
					hacer homenaje a la vendimia y a las cinco denominaciones de origen
					de vino que tenemos en la provincia de Valladolid.</p>
				</br>
				<p>
					D.O. Rueda, D.O. Toro, D.O. Ribera del Duero, D.O. Cigales y D.O.
					Tierra de León (sí, aunque no os lo creáis, parte de esa
					denominación se da dentro de la provincia de Valladolid, haz click
					<a
						href="https://www.xn--vino-espaa-19a.es/Denominacion-de-Origen-Tierra-de-Leon.html"
						class="seleccionado">aquí</a> si quieres leer más sobre ello).
				</p>
				<!-- </br>
    				<p>El menú que os presentamos es un menú degustación elaborado en
    					base a cada una de las denominaciones de origen que se dan en la
    					provincia de Valladolid. Cada uno de los cinco platos tiene como
    					eje principal una de ellas y un producto, que serán el centro
    					principal de cada uno. Además de los cinco platos, tendremos 5
    					tipos de vino para que podáis maridar como os apetezca, uno de cada
    					una de las denominaciones. Hacemos así una fiesta de la vendimia a
    					nuestro estilo y homenajeamos en nuestra tierra a uno de los
    					productos más importantes y consumidos de la misma.</p> -->
				</br>
				<p>De verdad, ¡¡esperamos que os guste!!</p>
			</div>

			<!-- img para móviles -->
			<img src='../img/Alargado_Evento_Vendimia.jpg'
				title='Tiempo de Vendimia' class="img_movil" />
			<!-- img con zoom para el resto de dispositivos -->
			<a class="fancybox" rel="group"
				href="../img/Apaisado_Evento_Vendimia.png"><img
				src="../img/Apaisado_Evento_Vendimia.png" class="img_ordenador"
				title='Tiempo de Vendimia' alt="Tiempo de Vendimia" /></a>

		</div>

		<div class="evento_secundario">

			<h3>OKTOBERFEST</h3>

			<div class="explicacion_evento">
				<p>
					Os traemos el evento Oktoberfest. Con él hemos querido crear un
					menú alemán en base a esta fiesta tan famosa de Múnich que se
					inició con una boda real en 1.810 (haz click <a
						href="https://www.oktoberfest.net/historia-del-oktoberfest/"
						class="seleccionado">aquí</a> si quieres leer más sobre ello).
					Hacemos un recorrido por los platos más típicos Bávaros aderezados
					con buenas cervezas de Múnich, todo ello en nuestro local decorado
					especialmente para el evento, así como la música y el atrezo de los
					camareros.
				</p>
				</br>
				<p>¡Esperamos que disfrutéis!</p>
			</div>

			<!-- img para móviles -->
			<img src='../img/Alargado_Evento_Oktoberfest.png' title='Oktoberfest'
				class="img_movil" />
			<!-- img con zoom para el resto de dispositivos -->
			<a class="fancybox" rel="group"
				href="../img/Apaisado_Evento_Oktoberfest.png"><img
				src="../img/Apaisado_Evento_Oktoberfest.png" class="img_ordenador"
				title='Oktoberfest' alt="Oktoberfest" /></a>

		</div>

		<div class="evento_secundario">

			<h3>SIDRERÍA FERIAS</h3>

			<div class="explicacion_evento">
				<p>Merendalia abre sus puertas en Valladolid. Para ello hemos
					diseñado un evento basado en un Menú Sidrería para Ferias, donde
					hemos querido evocar los ricos platos de las sidrerías vascas, y
					darles un toque especial propio de Merendalia. La máxima en este
					menú es el respeto al producto</p>
				</br>
				<p>¡Ven a compartir con nosotros el auténtico menú sidrería y
					preocúpate solo de disfrutar!</p>
			</div>

			<!-- img para móviles -->
			<img src='../img/Alargado_Evento_Sidrería_Ferias.png'
				title='Menú Sidrería' class="img_movil" />
			<!-- img con zoom para el resto de dispositivos -->
			<a class="fancybox" rel="group"
				href="../img/Apaisado_Evento_Sidrería_Ferias.png"><img
				src="../img/Apaisado_Evento_Sidrería_Ferias.png"
				class="img_ordenador" title='Menú Sidrería' alt="Menú Sidrería" /></a>


		</div>

	</div>

	<footer>
        <?php include_once("footer.php");?>        
    </footer>

</body>
</html>