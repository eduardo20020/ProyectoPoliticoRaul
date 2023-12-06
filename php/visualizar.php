<?php
require_once '../conexion.php';

// ... (código para insertar datos)

// Consulta para obtener los datos después de la inserción
$select_stmt = $db->prepare("SELECT nombres, apellidos, telefono, direccion, correo, ayuda FROM comentarios");
$select_stmt->execute();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Comentarios</title>
    <!-- Enlace al archivo CSS de Bootstrap 5 (versión minificada) desde el CDN de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5 text-center">
        <h2 class="text-center mb-4">Tabla de Comentarios</h2>
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" width="10%">Nombre</th>
                    <th scope="col" width="20%">Comentario</th>
                </tr>
            </thead>
            <tbody>

                <?php
                while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row["nombres"] . '</td>';
                    echo '<td>' . $row["ayuda"] . '</td>';
                    echo '</tr>';
                }
                ?>

            </tbody>
        </table>
        <button class="btn btn-primary"><a href="../index.html" style="text-decoration:none; color:black;">salir</a></button>
    </div>

    <!-- Incluye el archivo JavaScript de Bootstrap desde el CDN de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
