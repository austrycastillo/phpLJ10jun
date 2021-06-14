<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Acceso al banco</h1>
    <form action="cajero2.php" method="post">
        <input type="text" name="clave">
        <input type="submit" value="Acceder al banco">
    </form>
    <?php
    if (isset($_GET['rta']) && $_GET['rta'] == '5X') {
        echo "Datos incorrectos!";
    }
    ?>
</body>

</html>