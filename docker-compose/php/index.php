<?php
$servername = "db";
$username = "testuser";
$password = "testpassword";
$dbname = "testdb";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Realizar consulta
$sql = "SELECT 'Hola Mundo' as saludo";
$result = $conn->query($sql);

/ Mostrar resultados

 if ($result->num_rows > 0) {

     
     while($row = $result->fetch_assoc()) { 
               
        echo $row["saludo"];
     }

    
     } else  {

        echo "0 resultados";
     }
     
     $conn->close();
?>  
