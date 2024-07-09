<?php
// Incluir el archivo de conexión
include 'database.php';

if (isset($_POST['motor'])) {
    $motor = $_POST['motor'];

    // Consulta SQL para obtener los datos del vehículo basado en el motor seleccionado
    $sql = "SELECT Marca, `Precio Factura`, Modelo, `Año`, Color, Chasis, `PRECIO DE VENTA` FROM inventario WHERE Motor = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $motor);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Obtener los datos del vehículo
        $row = $result->fetch_assoc();
        
        // Calcular el seguro
        $precioFactura = $row['Precio Factura'];
        $seguro = ($precioFactura * 5.25 * 1.15 / 100) + 50;
        
        // Agregar el seguro al array de respuesta
        $row['Seguro'] = $seguro;

        // Devolver los datos como JSON
        echo json_encode($row);
    } else {
        echo json_encode(['error' => 'No se encontraron datos para el motor seleccionado.']);
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['error' => 'No se recibió ningún motor.']);
}
?>