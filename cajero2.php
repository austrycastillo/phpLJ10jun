<?php
$clave = $_POST['clave'];
$claveCorrecta = 123;
if ($clave == $claveCorrecta) {
    ?>
    <h2>Seleccione la opción:</h2>
    <form action="cajero3.php" method="post">
    <select name="opcion">
        <option value="1">consulta</option>
        <option value="2">depósito</option>
        <option value="3">retiro</option>
    </select>
    <input type="submit" value="enviar opción">
    </form>
    <?php
} else {
    header("location:cajero1.php?rta=5X");//redireccionar
}
