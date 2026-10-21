<?php
$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';
$pedido = $_POST['pedido'] ?? '';
$salts = ["Saltena de pollo - Bs 6","Docena de saltenas - Bs 65","Refresco de mocochinchi - Bs 5"];

echo "<h2>Pedido recibido en Salteneria El Horno</h2>";
echo "<p>Nombre : $nombre</p>";
echo "<p>Correo : $correo</p>";
echo "<p>Pedido : $pedido</p>";
echo "<ul>";
foreach ($salts as $salt){
echo "<li>.$salt.</li>";
}
echo "</ul>";
echo "Te atiende Raul Benardo Luna Tufiño";
?>