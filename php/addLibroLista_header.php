<?php
require_once '../clases/Connection.php';
include_once ('../clases/Usuario.php');
include_once ('../clases/Libro.php');
include_once ('../clases/Log.php');
include_once ('../clases/Lista.php');

$bd = Connection::dameInstancia();
$c = $bd->dameConexion();

$log = new Log();
$desdeDonde = "addLibroLista_header.php";
$usuario = new Usuario();
$libro = new Libro();
$lista = new Lista();
$idlista = $_GET['idlista'];
$idlibro = $_GET['idlibro'];
$idusuario = $_GET['idusuario'];
$titulo = $libro->nombreLibro($idlibro);
$myvar = str_replace(" ", "-", $titulo);

// Comprobamos que existe la lista y el libro e insertamos el libro en la lista,
// si el libro ya está en la lista mostrará un mensaje de error.
if (isset($idlista) and isset($idlibro)) {
    
    try {
        
        $tituloLista = $lista->nombreLista($idlista);
        
        $sql = "INSERT INTO listas_contienen_libros (id_lista, id_libro) VALUES (?,?)";
        $sentencia = $c->prepare($sql);
        $sentencia->bind_param("ii", $idlista, $idlibro);
        
        if ($sentencia->execute()) {
            
            $log->write_log($desdeDonde, "El libro con el título: " . $titulo . ", se añadió correctamente a la lista: " . $tituloLista, 
                null, "INFO", "*");
            
            $noerror = 'Libro añadido a la lista';
            $destino = "../Libro/" . $myvar . "&noerror=" . $noerror . "#mi-ancla";
            header('Location:' . $destino);
            
        } else {
            
            $log->write_log($desdeDonde, "El libro con el título: " . $titulo . ", ya existe en la lista: " . $tituloLista, 
                - 669, "ERROR", "*");
            
            $error = 'Este libro ya está en esa lista';
            $destino = "../Libro/" . $myvar . "&noerror=" . $error . "#mi-ancla";
            header('Location:' . $destino);
        }
        
    } catch (Exception $e) {
        
        $log->write_log_error_general($desdeDonde, "Error al intentar añadir el libro con título: " . $titulo . ", a la lista: " . $tituloLista . ". " . $e,
            - 1000, "ERROR", "*");
    }
}

?>