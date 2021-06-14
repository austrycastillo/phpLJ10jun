<?php
$saldo = 500;
$opcion = $_POST['opcion'];


switch ($opcion) {
    case 1:
        echo "Su saldo actual es $saldo";
        break;
    case 2:
?>
        <form action="" method="post">
            <input type="number" name="monto" placeholder="Escribe el monto a depositar">
            <input type="hidden" name="opcion" value="2">
            <button>Depositar</button>
        </form>
        <?php
        if (isset($_POST['monto'])) {
            $monto = $_POST['monto'];
            $saldo += $monto;
            echo "Depósito realizado correctamente, su saldo actual es $saldo";
        }
        break;
    case 3:
        ?>
        <form action="" method="post">
            <input type="number" name="monto" placeholder="Escribe el monto a retirar">
            <input type="hidden" name="opcion" value="3">
            <button>Retirar</button>
        </form>
<?php
        if (isset($_POST['monto'])) {
            $monto = $_POST['monto'];
            if ($monto > $saldo) {
                echo "Saldo insuficiente";
            } else {

                $saldo -= $monto;
                echo "Retiro realizado correctamente, su saldo actual es $saldo";
            }
        }
        break;
}
