<?php
// Incluir el archivo de conexión
include 'database.php';

// Consulta SQL para obtener todos los chasis de las motos
$sql = "SELECT Motor FROM inventario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Generar opciones del select con los resultados de la consulta
    echo '<option value=""></option>'; // Opción vacía por defecto
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['Motor'] . '">' . $row['Motor'] . '</option>';
    }
} else {
    echo '<option value="">No hay un Motor disponibles</option>';
}

// Cerrar la conexión
$conn->close();
?>