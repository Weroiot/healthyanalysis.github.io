<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Contacto</title>
</head>
<body>
    <header>
        <h1>Contacto</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="about.php">Quiénes Somos</a></li>
                <li><a href="medicamentos.php">Productos</a></li>
                <li><a href="contact.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="contact-us">
    <div class="container">
        <h2>¡Estamos aquí para ayudarte!</h2>
        <p>¿Tienes alguna pregunta sobre nuestros productos o servicios? ¿Necesitas asesoramiento personalizado? Nuestro equipo de expertos en salud está a tu disposición para brindarte la atención que mereces.</p>

        <div class="image-container">
            <img src="medicos-atendiendo.jpg" alt="Equipo médico brindando atención personalizada">
        </div>

        <p><strong>Contamos con una amplia experiencia en...</strong></p>
        <ul>
            <li>Asesoramiento personalizado</li>
            <li>Resolución de dudas</li>
            <li>Seguimiento de tratamientos</li>
            <li>...</li> </ul>

        <p>No dudes en contactarnos a través de nuestro formulario o por los siguientes medios:</p>
        </div>
</section>
    
    <section class="contacto">
        <form action="enviar_contacto.php" method="POST">
            <label>Nombre:</label><input type="text" name="nombre" required>
            <label>Email:</label><input type="email" name="email" required>
            <label>Mensaje:</label><textarea name="mensaje" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>
</body>
</html>
