<!--
- Visor de las noticias.
- @author Miguel Costa.
-
-->

<?php
require_once '../inc/funciones.php';
require_once '../inc/validaciones.inc.php';
include_once ("../clases/Noticia.php");
include_once ('../clases/Usuario.php');
sesion();

$usuario = new Usuario();

if (isset($_SESSION['datos'])) {
    $nick = $_SESSION['datos']['nick'];
    $id_usuario = $_SESSION['datos']['id_usuario'];
    $foto = $_SESSION['datos']['foto'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Página de Noticias</title>
<link type="text/css" rel="stylesheet" href="../css/font-awesome.css" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah"
	rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One'
	rel='stylesheet' type='text/css' />
<script src="../jquery/jquery-3.1.1.min.js"></script>

<!-- Metemos un aleatorio para el css y el jss -->
<script>
    var rutacss1 = "../css/main.css?" + Math.random();
    var rutacss2 = "../css/main_libros.css?" + Math.random();
    var rutajs1 = "../jquery/jquery_menuMoviles_desplegable.js?" + Math.random();
    var rutajs2 = "../jquery/jquery_scroll_menuNavegacion.js?" + Math.random();
    var rutajs3 = "../jquery/jquery_listaDeslizante.js?" + Math.random();
    var rutajs4 = "../jquery/jquery_busqueda_avanzada.js?" + Math.random();
    var script = "script";
    
    document.write('<link rel="stylesheet" href="' + rutacss1 + '" type="text/css" media="screen" />'); 
    document.write('<link rel="stylesheet" href="' + rutacss2 + '" type="text/css" media="screen" />'); 
    document.write('<script src="' + rutajs1 + '"></' + script + '>');
    document.write('<script src="' + rutajs2 + '"></' + script + '>');
    document.write('<script src="' + rutajs3 + '"></' + script + '>');
    document.write('<script src="' + rutajs4 + '"></' + script + '>');
</script>

</head>
<body>

	<header>

		<nav>
			<?php include_once ("menuNavVisores.php"); ?>	
		</nav>

		<div class="busqueda_avanzada">
			<div class="pestana">
				<p>Búsqueda avanzada</p>
			</div>				
				<?php include_once ("formulario_avanzado.php"); ?>			
			</div>

		<div class="devoralibros_mensual">                
			<?php include_once ("ganador_mes_index.php"); ?>
		</div>

	</header>
		
		<?php $noticia = new Noticia(); ?>
		
		<h1>Noticias</h1>
		
		<?php 
            $noticia->mostrarNoticias(); 
            include_once ("infografia.php");
        ?>
		
		<footer>		
			<?php include_once ("footer.php"); ?> 			
		</footer>

</body>
</html>
