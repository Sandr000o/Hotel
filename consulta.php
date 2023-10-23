<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];

    $query = $conn->prepare("SELECT * FROM reservas WHERE idHabitacion IN 
              (SELECT idHabitacion FROM habitaciones) 
              AND check_in_date <= ? 
              AND check_out_date >= ?");

    $query->bind_param("ss", $check_out, $check_in);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Lo sentimos, no hay disponibilidad para las fechas seleccionadas. Por favor, elija otras fechas.');</script>";
    } else {
        echo "<script>alert('¡Hay disponibilidad para las fechas seleccionadas!');</script>";
    }
}


$conn->close();
?>