<?php
/**
 * Manejo de eliminación de cuenta de usuario.
 * 
 * Este script verifica la sesión del usuario, establece una conexión a la base de datos
 * MySQL, y elimina el usuario correspondiente al usuario actualmente autenticado.
 * Si la eliminación es exitosa, destruye la sesión del usuario y lo redirige a la página de inicio.
 * En caso de error, muestra un mensaje de error detallado.
 *
 * @version 1.0
 * @author Pablo Alexander Mondragon Acevedo
 * @author Keiner Yamith Tarache Parra
 */

// Inicia la sesión si no está activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: controlador.php?seccion=seccion2&error=not_logged_in");
    exit();
}

// Configuración de la conexión a la base de datos
$servername = "localhost";  // Servidor de la base de datos
$username = "root";         // Usuario de la base de datos
$password = "";             // Contraseña de la base de datos
$dbname = "wikiprog";       // Nombre de la base de datos

// Crear conexión a la base de datos usando mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión ha fallado
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener el usuario_id de la sesión
$usuario_id = $_SESSION['usuario_id'];

// Consulta SQL para eliminar el usuario
$sql_delete_usuario = "DELETE FROM usuario WHERE usuario_id = $usuario_id";

// Ejecutar la consulta de eliminación y verificar si fue exitosa
if ($conn->query($sql_delete_usuario) === TRUE) {
    // Eliminación exitosa, destruir la sesión para desconectar al usuario
    session_destroy();
    header("Location: index.php"); // Redirigir a la página de inicio u otra página relevante
    exit();
} else {
    // Mostrar mensaje de error si la eliminación falla
    echo "Error al intentar eliminar la cuenta: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
