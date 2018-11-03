<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Envío correcto</title>
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

	<div class="contenedor_contacto">

		<h3>Formulario enviado</h3>

		<p>
			El formulario se ha enviado correctamente, en breve recibirá un
			correo de confirmación, si no le llega a la carpeta 'principal' puede
			que esté en la carpeta 'correo no deseado'. Puede ponerse en contacto
			con nosotros, además, por estos otros medios: </br>
			</br>Calle Paraíso 2 </br>
			</br>47003 Valladolid </br>
			</br>Teléfono 983.85.73.69 </br>
			</br>Email: <a href="mailto:info@merendalia.es" title="Contactar">info@merendalia.es</a>
		</p>
	</div>

	<footer class="fixed_abajo">
        <?php include_once("footer.php");?>        
    </footer>

</body>
</html>