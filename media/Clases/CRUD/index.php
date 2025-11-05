<?php
include('./logica/db.php');
$consulta= "SELECT * FROM usuarios";
$result = $conn->query($consulta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="./media/styles/styles.css">
    <link rel="icon" type="image/x-icon" href="./media/favicons/C19.ico">
</head>
<body>
    <h1>Usuarios</h1>
    <a href="./logica/create.php">Agregar Usuario</a>
    <hr>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td>
                <a href="./logica/update.php?id=<?php echo $row['id']; ?>">Editar</a>
                <br>
                <br>
                <a href="./logica/delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
