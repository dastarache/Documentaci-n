<?php
/**
 * Página de bienvenida para usuarios autenticados.
 * 
 * Este script PHP verifica si el usuario ha iniciado sesión. Si no ha iniciado sesión, redirige
 * automáticamente a la página de inicio de sesión (index.html). De lo contrario, muestra un mensaje
 * de bienvenida personalizado con el nombre de usuario.
 * 
 * @version 1.0
 * @author Pablo Alexander Mondragon Acevedo
 * @author Keiner Yamith Tarache Parra
 */

session_start(); // Inicia la sesión si no está activa

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    header("Location: index.html"); // Redirigir a la página de inicio de sesión si no ha iniciado sesión
    exit();
}

echo "Bienvenido, " . $_SESSION['username'] . "!";
?>
