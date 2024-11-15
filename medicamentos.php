<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Medicamentos</title>
</head>
<body>
    <header>
        <div class="logo">CATALAGO DE MEDICAMENTOS</div>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="about.php">Quiénes Somos</a></li>
                <li><a href="medicamentos.php">Productos</a></li>
                <li><a href="contact.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <section class="catalogo">
        <?php
        $sql = "SELECT * FROM productos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Obtener los datos de cada producto
                $nombre = $row['nombre'];
                $descripcion = $row['descripcion'];
                $precio = $row['precio'];
                $imagen = $row['imagen'];
                $precio_iza = $row['precio_farmacia_iza'];  // Precio Farmacia Iza
                $precio_simi = $row['precio_simi_similares'];  // Precio Similares
                $precio_guadalajara = $row['precio_farmacia_guadalajara']; // Precio Farmacia Guadalajara

                // Mostrar el producto
                echo "<div class='producto'>";
                echo "<img src='medicamentos/" . $imagen . "' alt='" . $nombre . "'>";
                echo "<h2>" . $nombre . "</h2>";
                echo "<p>" . $descripcion . "</p>";
                echo "<p>Precio: $" . $precio . "</p>";

                // Comparación de precios de las tres farmacias
                echo "<p><strong>Farmacia Iza:</strong> $" . $precio_iza . "</p>";
                echo "<p><strong>Similares:</strong> $" . $precio_simi . "</p>";
                echo "<p><strong>Farmacia Guadalajara:</strong> $" . $precio_guadalajara . "</p>";

                // Mensaje si es más barato que la competencia
                if ($precio < $precio_iza && $precio < $precio_simi && $precio < $precio_guadalajara) {
                    echo "<p class='oferta' style='color: green;'>¡Más barato que la competencia!</p>";
                }

                echo "</div>";
            }
        } else {
            echo "<p>No hay productos disponibles.</p>";
        }
        ?>
    </section>
</body>
</html>
