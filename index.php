<?php
// Cargar las secciones comunes
require_once 'header.php';
require_once 'menu.php';

// Determinar el contenido a cargar
$pagina = isset($_GET['seccion']) ? $_GET['seccion'] : 'inicio';
$archivo = "contenido/$pagina.php";

// Verificar si la sección existe
if (file_exists($archivo)) {
    require_once $archivo;
} else {
    echo "<h2>Sección no encontrada</h2>";
}

require_once 'footer.php';
?>
