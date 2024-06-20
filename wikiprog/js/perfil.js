/**
 * Funciones para manejar la eliminación de cuenta de usuario y mostrar un modal de confirmación.
 * 
 * - confirmarEliminarCuenta(): Muestra el modal de confirmación para eliminar la cuenta.
 * - cerrarModal(): Cierra el modal de confirmación.
 * - eliminarCuenta(): Realiza una llamada AJAX para eliminar la cuenta del usuario en el servidor.
 * - window.onclick: Cierra el modal si el usuario hace clic fuera de él.
 *
 * @version 1.0
 * @author Pablo Alexander Mondragon Acevedo
 *         Keiner Yamith Tarache Parra
 */

// Función para mostrar el modal de confirmación
function confirmarEliminarCuenta() {
    document.getElementById('myModal').style.display = 'block';
}

// Función para cerrar el modal
function cerrarModal() {
    document.getElementById('myModal').style.display = 'none';
}

// Función para eliminar la cuenta
function eliminarCuenta() {
    // Aquí puedes añadir una llamada AJAX para eliminar la cuenta del usuario en el servidor
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "controlador.php?accion=eliminarCuenta", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Suponiendo que el servidor responde con éxito
            alert("Cuenta eliminada exitosamente.");
            window.location.href = "controlador.php?seccion=seccion2";
        }
    };
    xhr.send();
}

// Cerrar el modal si el usuario hace clic fuera de él
window.onclick = function(event) {
    var modal = document.getElementById('myModal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
};
