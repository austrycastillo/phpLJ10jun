<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 1 php</title>
</head>

<body>
    <?php
    /*echo "<h1 style=color:red>Hola mundo con PHP</h1>";
        $nombre = "Austry";
        $num = 45;
        echo $nombre;
        echo ", El número es: ".$num;
        //comentario de una línea
        /*
        comentario de 
        varias líneas
        Operaciones aritmeticas + - * / %(modulo)
        */
    $n1 = 150;
    $n2 = 200;
    //echo $n1 + $n2;
    $t = $n2 - $n1 - 1;
    $t++; //$t = $t + 1; también --
    $t += $n1; //$t = $t + $n1; también -= *= /= %=
    //echo $t;
    //op de comparación < > <= >= == !=
    //echo $n1 < $n2;//1 = true
    //echo $n1 > $n2;// false queda en blanco
    //op lógicos &&(and) || (or)
    /*
    true and true   = true
    true and false  = false
    false and true  = false
    false and false = false

    false or false = false
    true or false  = true
    false or true  = true
    true or true   = true

    Negación: solo con boolean
    !$variable;
    ******
    variables superglobales
    get --> hipervinculo para url, form para url
    post -> form invisible
    */

    ?>
    <a href="clase1B.php?dia=color&color=verde&nombre=Pepe">Ir al nuevo sitio</a>
    <h1 style="color: yellow;">
        <?php //echo "Hola otra vez"; 
        ?>
    </h1>
    <!-- <form action="" method="get"> -->
    <!-- <form action="clase1B.php" method="get"> -->
    <form action="" method="post">
        <input type="text" name="dia" placeholder="dia">
        <input type="text" name="color" placeholder="color">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="submit" value="enviar datos" name="boton">
    </form>
    <hr>
    <?php
    //error_reporting(E_ALL);
    if (isset($_GET['dia'])) { //isset verifica si esta definida una variable
        echo $_GET['dia'] . "<br>";
        echo $_GET['color'] . "<br>";
        echo $_GET['nombre'];
        
    }
    if (isset($_POST['dia'])) { //isset verifica si esta definida una variable
        echo $_POST['dia'] . "<br>";
        echo $_POST['color'] . "<br>";
        echo $_POST['nombre'];
        
    }

    ?>
</body>

</html>