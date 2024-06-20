<?php
/**
 * Este script inicia la sesión y gestiona la carga dinámica de secciones.
 * 
 * Sección por defecto: 'seccion2'. Si se proporciona una sección válida a través de GET,
 * se carga esa sección. Finalmente, se incluye la plantilla 'plantilla.php' para la interfaz.
 *
 * @version 1.0
 * @author Pablo Alexander Mondragon Acevedo
 * @author Keiner Yamith Tarache Parra
 */

// Iniciar sesión
session_start();

// Sección por defecto
$seccion = "seccion2";

// Verificar si se ha proporcionado una sección válida a través de GET
if (isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];
}

// Incluir la plantilla para la interfaz
include("plantilla.php");
?>
