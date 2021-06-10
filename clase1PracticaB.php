<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos recibidos</h1>
    <table border="1" cellspacing="0" cellpadding="15">
        <tr>
            <th>Película</th>
            <th>Actores</th>
            <th>Precio</th>
        </tr>
        <tr>
            <td><?= $_POST['pelicula']; ?></td>
            <td><?= $_POST['actores']; ?></td>
            <td><?= $_POST['precio']; ?></td>
        </tr>
    </table>
</body>
</html>