<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="../img/Logo_Fondo_Blanco.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/acercade.css">
    <link rel="stylesheet" href="../js/acercade.js">
    <title>Ama Lo Increíble</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <br>

    <!-- Título -->
    <div class="container">
        <h2 class="text-left custom-font">Te invitamos a conocernos</h2>
    </div>

    <!-- Contenedor -->
    <div class="container mx-auto text-center">
        <div class="row align-items-center">
            <div class="col-md-9">
                <p class="parrafo">¡Bienvenido a Ama Lo Increíble, tu destino para encontrar ropa excepcional y única!
                    Nos apasiona
                    ofrecerte una selección cuidadosamente curada de prendas de vestir que te permitirán expresar tu
                    estilo personal y destacar entre la multitud. Nos enorgullece ofrecer diseños exclusivos y de
                    alta
                    calidad que reflejan las últimas tendencias de la moda, sin comprometer la comodidad y la
                    durabilidad. Ya sea que busques un look casual y relajado o desees lucir radiante en una ocasión
                    especial, Ama Lo Increíble tiene todo lo que necesitas para vestirte con confianza. Descubre una
                    experiencia de compra sin igual y déjate sorprender por nuestras opciones de ropa que te harán
                    sentir increíble. ¡Únete a nosotros y descubre la magia de Ama Lo Increíble hoy mismo!</p>
            </div>
            <div class="col-md-8 imagen">
                <img src="../img/MujerSenalando.jpg" alt="Imagen" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- Cards -->
    <div class="card-container">
        <!-- Visión -->
        <div class="card" id="vision-card">
            <div class="card-inner">
                <div class="card-front">
                    <img src="../img/Vision_Image.png" alt="Visión de la empresa">
                </div>
                <div class="card-back">
                    <h3>Visión</h3>
                    <p>En "Ama Lo Increíble", aspiramos a convertirnos en una marca líder en la industria de la moda,
                        ofreciendo prendas de vestir de calidad y estilo vanguardista. Nuestra visión es ser reconocidos
                        a nivel mundial, celebrando la individualidad, promoviendo la inclusión y adoptando prácticas
                        sostenibles. Buscamos inspirar el amor propio y ser una fuerza positiva en la sociedad,
                        redefiniendo los estándares de la moda.</p>
                </div>
            </div>
        </div>
        <!-- Misión -->
        <div class="card" id="mision-card">
            <div class="card-inner">
                <div class="card-front">
                    <img src="../img/Mision_Image.png" alt="Misión de la empresa">
                </div>
                <div class="card-back">
                    <h3>Misión</h3>
                    <p>En "Ama Lo Increíble", nuestra misión es ofrecer prendas de vestir modernas y atractivas para
                        hombres y mujeres, con altos estándares de calidad y materiales de primera. Buscamos
                        proporcionar una experiencia de compra excepcional, brindando atención al cliente personalizada
                        y superando las expectativas en cada interacción. Nos esforzamos por mantenernos a la vanguardia
                        de la moda, promoviendo prácticas éticas y sostenibles, y empoderando a nuestros clientes para
                        que se amen a sí mismos y se sientan increíbles en cada prenda que elijan.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pruebas de PHP -->
    <?php
    require_once '../config/config.php';

    $conexion = mysqli_connect($host, $username, $password, $database);

    // Verificar la conexión
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Consulta SELECT
    $sql = "SELECT * FROM ropa";
    $resultado = mysqli_query($conexion, $sql);

    // Mostrar los datos en una tabla HTML
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        echo '<table class="table table-striped">';
        echo '<tr><th>Cantidad</th><th>Precio</th><th>Tipo</th><th>Color</th><th>Descripción</th><th>Género</th></tr>';

        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila["cantidad"] . "</td>";
            echo "<td>" . $fila["precio"] . "</td>";
            echo "<td>" . $fila["tipo"] . "</td>";
            echo "<td>" . $fila["color"] . "</td>";
            echo "<td>" . $fila["descripcion"] . "</td>";
            echo "<td>" . $fila["genero"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }

    // Cerrar la conexión
    mysqli_close($conexion);
    ?>
    
    <?php include 'footer.php'; ?>

    <!-- Scrip del Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>