<a href="clase6.php?leer=si">Mostrar datos registrados</a><br>
<a href="clase6.php?leer=dos">Mostrar datos del csv</a><br>

<form action="">
    <input type="text" placeholder="Escribe un texto" name="texto">
    <select name="tipo">
        <option>txt</option>
        <option>csv</option>
    </select>
    <input type="submit" value="guardar texto" name="enviar">
</form>
<?php
$archivo = "archivo.txt";
if (isset($_GET['enviar'])&& $_GET['tipo']=="txt") {
    //paso 1 abrir

    $texto = "\n" . $_GET['texto'];
    if ($manejador = fopen($archivo, "a+")) {
        echo "abrimos ;)";
        //paso 2 operaciones
        fwrite($manejador, $texto);
        //paso 3
        fclose($manejador);
    } else {
        echo "Error no puedo leer";
    }
}
if (isset($_GET['leer']) && $_GET['leer'] == 'si') {
    $manejador = fopen($archivo, "r");
    while ($dato = fgets($manejador)) {
        echo $dato . "<br>";
    }
    fclose($manejador);
}
if (isset($_GET['leer']) && $_GET['leer'] == 'dos') {
    $archivo = "archivo.csv";
    $manejador = fopen($archivo, "r");
    while ($dato = fgetcsv($manejador, ",")) {
        //var_dump($dato);
        $tam = count($dato);
        for ($i = 0; $i < $tam; $i++) {
            echo $dato[$i]."<br>";
        }
    }
    fclose($manejador);
}
if (isset($_GET['enviar'])&& $_GET['tipo']=="csv") {
    $archivo = "archivo.csv";
    $texto = "\n" . $_GET['texto'];
    if ($manejador = fopen($archivo, "a+")) {
        echo "abrimos ;)";
        //paso 2 operaciones
        fwrite($manejador, $texto);
        //paso 3
        fclose($manejador);
    } else {
        echo "Error no puedo leer";
    }
}