<?php
/*
---> if simple
if(condición){
    instrucciones
}
---> if else
if(condición){
    instrucciones 1
}else{
    instrucciones 2
}
---> if else if
if(condición){
    instrucciones 1
}else if(condición){
    instrucciones 2
}else if(condición){
    instrucciones 3
}else{
    instrucciones 4
}
*/
// $num = 50;
// if ($num < 20) {
//     echo "Es menor";
// }else{
//     echo "Es mayor";
// }
/*
vamos al boliche (rango de edad: 18 y 30 años)
construir un form
si entramos, verificar si tiene 22 años para
otorgar una bebida gratis
si no entramos, indicar la razón
*/
// 
?>
<!-- // <form action="" method="post">
//     Escribe la edad del cliente: <input type="number" name="edad">
//     <button>Verificar</button>
// </form> -->
<?php
// if (isset($_POST['edad'])) {
//     $edad = $_POST['edad'];
//     if ($edad >= 18 && $edad <= 30) {
//         echo "<h1>Bienvenido 😀 $edad</h1>";
//         if($edad == 22){
//             echo "<h2>Tienes una bebida gratis 🤪";
//         }
//     } else {
//         echo "<h1 style=color:red>No puedes pasar 😫</h1>";
//         if($edad < 18){
//             echo "<h2>por bebito</h2>";
//         }else{
//             echo "<h2>por viejito</h2>";
//         }
//     }
// }
/*
solicitar un número a través de un form
e indicar si tiene 1,2,3,4 o más cifras
ej: 6 --> menor a 10
*/
?>
<!-- <form action="" method="get">
    <input type="number" name="numero" placeholder="Escribe un número">
    <input type="submit" value="decir cantidad">
</form> -->
<?php
// if (isset($_GET['numero'])) {
//     $numero = $_GET['numero'];
//     if ($numero < 10) {
//         echo "Tiene una cifra";
//     } elseif ($numero < 100) {
//         echo "Tiene dos cifras";
//     } elseif ($numero < 1000) {
//         echo "Tiene tres cifras";
//     } elseif ($numero < 10000) {
//         echo "Tiene cuatro cifras";
//     } else {
//         echo "Tiene más de cinco cifras";
//     }
// }
/*
switch(variable){
    case valor1:
        instrucciones 1
        break;
    case valor2:
        instrucciones 2
        break;
    default:
        instrucciones
        break;
}
*/
$color = "rosado";
switch ($color) {
    case "azul":
        echo "Tu variable es azul";
        break;
    case "verde":
        echo "tu variable es verde";
        break;
    case "blanco":
    case "BLANCO":
    case "Blanco":
        echo "tu variable es blanco";
        break;
    case "rosado":
        echo "tu variable es rosado";
        break;
    default:
        echo "no existe el color";
        break;
}
/*
crear un sistema de cajero:
- evaluar las credenciales
- mostrar un menú de opciones (consultar, depositar, retiro)
- en archivos independientes
*/