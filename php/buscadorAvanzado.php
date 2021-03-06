<!--
- Archivo buscadorAvanzado.php con toda la estructura del buscador avanzado de libros.
- @author   Miguel Costa.
-
-->
<?php
require_once '../inc/funciones.php';
sesion();
require_once '../inc/validaciones.inc.php';
include_once ("../clases/Libro.php");
include_once ('../clases/Usuario.php');
$usuario = new Usuario();

if (isset($_SESSION['datos'])) {
    $nick = $_SESSION['datos']['nick'];
    $id_usuario = $_SESSION['datos']['id_usuario'];
    $foto = $usuario->getFoto($id_usuario);
}

// Variable de sesion para saber en qué página estamos y podamos volver a ella
$_SESSION['pagina'] = "buscador_avanzado";

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Buscador Avanzado</title>
<link type="text/css" rel="stylesheet" href="../css/font-awesome.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah"
	rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One'
	rel='stylesheet' type='text/css' />
<script src="../jquery/jquery-3.1.1.min.js"></script>
<script async
	src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	
<script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-6841941891904085",
      enable_page_level_ads: true
    });
</script>

<!-- Metemos un aleatorio para el css y el jss -->
<script>
    var rutacss1 = "../css/main.css?" + Math.random();
    var rutacss2 = "../css/main_libros.css?" + Math.random();
    var rutacss3 = "../css/main_perfil.css?" + Math.random();
    var rutajs1 = "../jquery/jquery_menuMoviles_desplegable.js?" + Math.random();
    var rutajs2 = "../jquery/jquery_scroll_menuNavegacion.js?" + Math.random();
    var rutajs3 = "../jquery/jquery_listaDeslizante.js?" + Math.random();
    var rutajs4 = "../jquery/jquery_busqueda_avanzada.js?" + Math.random();
    var script = "script";
    
    document.write('<link rel="stylesheet" href="' + rutacss1 + '" type="text/css" media="screen" />'); 
    document.write('<link rel="stylesheet" href="' + rutacss2 + '" type="text/css" media="screen" />'); 
    document.write('<link rel="stylesheet" href="' + rutacss3 + '" type="text/css" media="screen" />');
    document.write('<script src="' + rutajs1 + '"></' + script + '>');
    document.write('<script src="' + rutajs2 + '"></' + script + '>');
    document.write('<script src="' + rutajs3 + '"></' + script + '>');
    document.write('<script src="' + rutajs4 + '"></' + script + '>');
</script>

</head>
<body>
	<header>
		<nav>
            <?php include_once("menuNavBuscadores.php");?>		
	</nav>
		<div class="busqueda_avanzada">
			<div class="pestana">
				<p>Búsqueda avanzada</p>
			</div>
            <?php include_once("formulario_avanzado.php");?>
        </div>
		<div class="devoralibros_mensual">                
            <?php include_once("ganador_mes_index.php");?>
        </div>
	</header>
    <?php
    
    // Click en botón 'mostrar todos'
    if (isset($_REQUEST['mostrarTodos']) || ( isset($_GET["pag"]) && isset($_GET["mostrarTodos"]) )) {
        
        $resultados = libro::buscarTitulo("%");
        
        if ($resultados == 0) {
            echo "Se ha producido un error en la busqueda.";
        } else if ($resultados['numero'] == 0) {
            echo "<h2 class='resultados'>No se encontraron resultados.</h2>";
        } else {
            
            // Limito la busqueda
            $TAMANO_PAGINA = 20;
            $pag = false;
            
            // examino la pagina a mostrar y el inicio del registro a mostrar
            if (isset($_GET["pag"]))
                $pag = $_GET["pag"];
                
            if (! $pag) {
                $inicio = 0;
                $pag = 1;
            } else {
                $inicio = ($pag - 1) * $TAMANO_PAGINA;
            }
            
            // calculo el total de paginas
            $total_paginas = ceil($resultados['numero'] / $TAMANO_PAGINA);
            
            // Muestro todos los libros
            $resultados = libro::buscarTituloLimit( "%", $inicio,$TAMANO_PAGINA );
            
            echo "<h2 class='resultados'>Todos los libros</h2>";
            echo "<div class='ultimosSubidos'><ul class='temas_flex'>";
            
            for ($i = 0; $i < count($resultados['filas_consulta']); $i ++) {
                foreach ($resultados['filas_consulta'][$i] as $key => $value) {
                    if ($key == "id_libro") {
                        $id_libro_actual = $value;
                    } elseif ($key == "img_portada") {
                        $img_portada = $value;
                    } elseif ($key == "titulo") {
                        $titulo = $value;
                        $myvar = str_replace(" ", "-", $titulo);
                    }
                }
                echo "<li><a href='../Libro/" . $myvar . "'><img src='../img_libros/" . $img_portada . "' alt='" . $titulo . "' title='" . $titulo . "'/></a></li>";
            }
            echo "</ul></div>";
            
            echo '<div class="numeracion">';
            
            if ($total_paginas > 1) {
                
                if ($pag != 1)
                        echo '<a href="../BuscadorAvanzado/?pagina=1&pag=' . ($pag - 1) . '&mostrarTodos"><img src="../img/izq.gif" border="0"></a>';
                        
                        for ($i = 1; $i <= $total_paginas; $i ++) {
                            if ($pag == $i)
                                // si muestro el índice de la página actual, no coloco enlace
                                echo $pag;
                                else
                                    // si el índice no corresponde con la página mostrada actualmente,
                                    // coloco el enlace para ir a esa página
                                    echo '  <a href="../BuscadorAvanzado/?pagina=1&pag=' . $i . '&mostrarTodos">' . $i . '</a>  ';
                        }
                        
                        if ($pag != $total_paginas)
                            echo '<a href="../BuscadorAvanzado/?pagina=1&pag=' . ($pag + 1) . '&mostrarTodos"><img src="../img/der.gif" border="0"></a>';
                }
            
            echo '</div>';
        }
    } 

    // Se ha introducido algún parámetro de búsqueda
    elseif ( (isset($_POST['titulo']) and isset($_POST['autor']) and isset($_POST['genero'])) ||
             (isset($_SESSION['titulo']) || isset($_SESSION['autor']) || isset($_SESSION['genero'])) ) {
            
            if (empty($_POST['titulo']) && !isset($_SESSION['titulo'])) {
                $titulo = "";
                $_SESSION['titulo'] = $titulo;
            } else {
                
                if ( isset($_POST['titulo'] )) {
                    $_SESSION['titulo'] = $_POST['titulo'];
                    // filtramos el input name=titulo para evitar ataques como los XSS Cross-Site Scripting
                    $titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRING);
                } else {
                    $titulo = filter_var($_SESSION['titulo'], FILTER_SANITIZE_STRING);
                }
            }
            
            if (empty($_POST['autor']) && !isset($_SESSION['autor'])) {
                $autor = "";
                $_SESSION['autor'] = $autor;
            } else {
                
                if ( isset($_POST['autor'] )) {
                    $_SESSION['autor'] = $_POST['autor'];
                    // filtramos el input name=titulo para evitar ataques como los XSS Cross-Site Scripting
                    $autor = filter_var($_POST['autor'], FILTER_SANITIZE_STRING);
                } else {
                    $autor = filter_var($_SESSION['autor'], FILTER_SANITIZE_STRING);
                }
            }
            if (empty($_POST['isbn']) && !isset($_SESSION['isbn'])) {
                $isbn = "";
                $_SESSION['isbn'] = $isbn;
            } else {
                
                if ( isset($_POST['isbn'] )) {
                    $_SESSION['isbn'] = $_POST['isbn'];
                    // filtramos el input name=titulo para evitar ataques como los XSS Cross-Site Scripting
                    $isbn = filter_var($_POST['isbn'], FILTER_SANITIZE_STRING);
                } else {
                    $isbn = filter_var($_SESSION['isbn'], FILTER_SANITIZE_STRING);
                }
            }
            
            if ( isset($_POST['genero'] )) {
                $genero = $_POST['genero'];
                $_SESSION['genero'] = $_POST['genero'];
            } else {
                $genero = $_SESSION['genero'];
            }
            
            $resultados = libro::buscarLibro($titulo, $autor, $isbn, $genero);
            if ($resultados == 0) {
                echo "Se ha producido un error en la búsqueda.";
            } else if ($resultados['numero'] == 0) {
                echo "<h2 class='resultados'>No se encontraron resultados.</h2>";
            } else {
                
                $numeroResultados = $resultados['numero'];
                
                // Limito la busqueda
                $TAMANO_PAGINA = 20;
                $pag = false;
                
                // examino la pagina a mostrar y el inicio del registro a mostrar
                if (isset($_GET["pag"]))
                    $pag = $_GET["pag"];
                    
                if (! $pag) {
                    $inicio = 0;
                    $pag = 1;
                } else {
                    $inicio = ($pag - 1) * $TAMANO_PAGINA;
                }
                
                // calculo el total de paginas
                $total_paginas = ceil($resultados['numero'] / $TAMANO_PAGINA);
                
                // Muestro todos los libros
                $resultados = libro::buscarLibroLimit($titulo, $autor, $isbn, $genero, $inicio, $TAMANO_PAGINA);
                
                echo "<h2 class='resultados'>Se encontraron " . $numeroResultados . " resultado/s.</h2>";
                echo "<div class='ultimosSubidos'><ul class='temas_flex'>";
                
                for ($i = 0; $i < count($resultados['filas_consulta']); $i ++) {
                    foreach ($resultados['filas_consulta'][$i] as $key => $value) {
                        if ($key == "id_libro") {
                            $id_libro_actual = $value;
                        } elseif ($key == "img_portada") {
                            $img_portada = $value;
                        } elseif ($key == "titulo") {
                            $titulo = $value;
                            $myvar = str_replace(" ", "-", $titulo);
                        }
                    }
                    echo "<li><a href='../Libro/" . $myvar . "'><img src='../img_libros/" . $img_portada . "' alt='" . $titulo . "' title='" . $titulo . "' /></a></li>";
                }
                echo "</ul></div>";
                
                echo '<div class="numeracion">';
                
                if ($total_paginas > 1) {
                    
                    if ($pag != 1)
                        echo '<a href="../BuscadorAvanzado/?pagina=1&pag=' . ($pag - 1) . '"><img src="../img/izq.gif" border="0"></a>';
                        
                        for ($i = 1; $i <= $total_paginas; $i ++) {
                            if ($pag == $i)
                                // si muestro el índice de la página actual, no coloco enlace
                                echo $pag;
                                else
                                    // si el índice no corresponde con la página mostrada actualmente,
                                    // coloco el enlace para ir a esa página
                                    echo '  <a href="../BuscadorAvanzado/?pagina=1&pag=' . $i . '">' . $i . '</a>  ';
                        }
                        
                        if ($pag != $total_paginas)
                            echo '<a href="../BuscadorAvanzado/?pagina=1&pag=' . ($pag + 1) . '"><img src="../img/der.gif" border="0"></a>';
                }
                
                echo '</div>';
            }
    }
    
    // No se ha metido ningún valor
    else {
        
        $resultados = libro::buscarTitulo("%");
        
        if ($resultados == 0) {
            echo "Se ha producido un error en la busqueda.";
        } else if ($resultados['numero'] == 0) {
            echo "<h2 class='resultados'>No se encontraron resultados.</h2>";
        } else {
            
            // Limito la busqueda
            $TAMANO_PAGINA = 20;
            $pag = false;
            
            // examino la pagina a mostrar y el inicio del registro a mostrar
            if (isset($_GET["pag"]))
                $pag = $_GET["pag"];
                
                if (! $pag) {
                    $inicio = 0;
                    $pag = 1;
                } else {
                    $inicio = ($pag - 1) * $TAMANO_PAGINA;
                }
                
                // calculo el total de paginas
                $total_paginas = ceil($resultados['numero'] / $TAMANO_PAGINA);
                
                // Muestro todos los libros
                $resultados = libro::buscarTituloLimit( "%", $inicio,$TAMANO_PAGINA );
                
                echo "<h2 class='resultados'>Todos los libros</h2>";
                echo "<div class='ultimosSubidos'><ul class='temas_flex'>";
                
                for ($i = 0; $i < count($resultados['filas_consulta']); $i ++) {
                    foreach ($resultados['filas_consulta'][$i] as $key => $value) {
                        if ($key == "id_libro") {
                            $id_libro_actual = $value;
                        } elseif ($key == "img_portada") {
                            $img_portada = $value;
                        } elseif ($key == "titulo") {
                            $titulo = $value;
                            $myvar = str_replace(" ", "-", $titulo);
                        }
                    }
                    echo "<li><a href='../Libro/" . $myvar . "'><img src='../img_libros/" . $img_portada . "' alt='" . $titulo . "' title='" . $titulo . "'/></a></li>";
                }
                echo "</ul></div>";
                
                echo '<div class="numeracion">';
                
                if ($total_paginas > 1) {
                    
                    if ($pag != 1)
                        echo '<a href="../BuscadorAvanzado/?pagina=1&pag=' . ($pag - 1) . '&mostrarTodos"><img src="../img/izq.gif" border="0"></a>';
                        
                        for ($i = 1; $i <= $total_paginas; $i ++) {
                            if ($pag == $i)
                                // si muestro el índice de la página actual, no coloco enlace
                                echo $pag;
                                else
                                    // si el índice no corresponde con la página mostrada actualmente,
                                    // coloco el enlace para ir a esa página
                                    echo '  <a href="../BuscadorAvanzado/?pagina=1&pag=' . $i . '&mostrarTodos">' . $i . '</a>  ';
                        }
                        
                        if ($pag != $total_paginas)
                            echo '<a href="../BuscadorAvanzado/?pagina=1&pag=' . ($pag + 1) . '&mostrarTodos"><img src="../img/der.gif" border="0"></a>';
                }
                
                echo '</div>';
        }
        
    }
    
    ?>
    <?php include_once("infografia.php");?>
    <footer>
        <?php include_once("footer.php");?>        
    </footer>
</body>
</html>

