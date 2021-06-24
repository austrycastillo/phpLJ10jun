<?php
function saludar()
{
    echo "Holaaaaa";
}
function saludar2()
{
    $saludo = "Hola jueves";
    return $saludo;
}
function mencionar($nombre)
{
    echo "Hola $nombre";
}
function mencionar2($nombre = "Pepe")
{
    echo "Hey $nombre";
}
function sumar($a, $b, $c)
{
    return $a + $b + $c;
}
// saludar();
// echo saludar2();
// mencionar("Fulano");
// mencionar2();
// mencionar2("Amelia");
// echo sumar(10,5,2);
?>
<!-- <form action="" method="post">
    <input type="number" name="num1" placeholder="Escribe un número">
    <input type="number" name="num2" placeholder="Escribe otro número">
    <button>Mostrar</button>
</form> -->
<?php
function ejecutar($num1, $num2)
{
    if ($num1 == $num2) {
        echo "<b style=color:red>Los números son iguales</b>";
    } elseif ($num1 < $num2) {
        $min = $num1;
        $max = $num2;
        bucle($min,$max);
    } else {
        $min = $num2;
        $max = $num1;
        bucle($min,$max);
    }
    
}
function bucle($x, $y)
{
    for ($x; $x <= $y; $x++) {
        echo $x."<br>";
    }
}
if (isset($_POST['num1'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    //ejecutar($num1,$num2);
}

$dato = "lo que sea";
// echo strtoupper($dato);
$dato = "OTRO TEXTO";
// echo strtolower($dato);
// echo ucfirst(strtolower($dato));
// echo substr($dato,0,1);
$dato = 20.8;
// echo round($dato);
// echo floor($dato);
$dato = 15.3;
// echo ceil($dato);
// is_numeric($dato);
// is_string();
// is_integer();
trim($dato);//ltrim rtrim
$dato = 52364523.52364;
echo number_format($dato,4,',','.');