<?php
/*
while(condición){
    instrucciones
    ajuste
}
*/
// $a = 1;
// while($a <= 10){
//     if($a != 2 && $a != 7){
//         echo $a."<br>";
//     }
//  $a++;//$a = $a + 1;
// }
//a--> 11
//impri --> 1 2 3
/*
do{
    instrucciones
    ajuste
}while(condición)
*/
// $b = 100;
// do {
//     echo $b . " - ";
//     $b++;
// } while ($b <= 10);

// $flag = "a";
// //no ejecutar es un bucle infinito
// do {
//     

//     <form action="">
//     <input type="text" name="dato">
//     <button>enviar</button>
//     </form>

//     if(isset($_GET['dato'])){
//         $flag = $_GET['dato'];
//         //form
//     }else{
//        $flag = "x"; 
//     }
// } while ($flag != "x");
/*
for(inicio;condición;ajuste){
    instrucciones
}
*/
?>
<?php
// for ($i = 1; $i <= 10; $i++) {
//     echo $i;
// }
//imprimir la suma de los números del 250 al 300
// $suma = 0;
// for ($i = 250; $i <= 300; $i++) {
//     $suma += $i;
// }
// echo $suma;
//crear un form y solicitar al usuario
//un número, para presentar la tabla
//de multiplicar, ej 2 x 1 = 2, 2 x 2 = 4
?>
<!-- <form action="" method="post">
    <input type="text" placeholder="Escribe un número del 1 al 10" size="40" name="num">
    <input type="submit" value="mostrar tabla">
</form>
<hr> -->
<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $num = $_POST['num'];
//     if ($num > 0 && $num <= 10) {
//         for ($i = 1; $i <= 10; $i++) {
//             echo "$num x $i = " . $num * $i. "<br>";
//         }
//     } else {
//         echo "No funciona con ese dato, verifique";
//     }
// }

//VECTORES
// $edad[0] = 20;
// $edad[1] = 5;
// $edad[2] = 100;
// $edad[3] = 45;
// $edad[4] = 18;

// //echo $edad[2];
// $tam = count($edad);
// for ($i = 0; $i < $tam; $i++) {
//     echo $edad[$i] . "<br>";
// }
// $v[] = 1;
// $v[] = 2;
// $v[] = 3;

// //echo $v[1];

// $b[25] = 4;
// $b[44] = 5;
// //echo $b[44];
// $b[44] = 50;
// //echo $b[44];
// //arrelos asociativos
// $moneda["Argentina"] = "Peso";
// $moneda["USA"] = "Dolar";
// $moneda["España"] = "Peseta";
// echo $moneda["Argentina"];

// $paciente = array(
//     "nombre" => "Juan",
//     "edad" => 18,
//     "correo" => "j@web.com"
// );

// $alumno = [
//     "nombre" => "Juan",
//     "edad" => 18,
//     "correo" => "j@web.com"
// ];
// echo $alumno["nombre"];
// $alumno["dirección"]= "Mendoza";
// echo "<br>";
// echo count($alumno);
// echo "<hr>alumnos";
// var_dump($alumno);
// echo "<br>";
// var_dump($paciente);
// echo "<br>";
// print_r($paciente);
// echo "<hr>";
// foreach($paciente as $valor){
//     echo $valor." - ";
// }
// echo "<hr>";
// foreach($paciente as $indice => $valor){
//     echo "$indice:  $valor - ";
// }
// echo "<hr>";
// foreach($edad as $a){
//     echo $a;
// }
// $animal[0][1][2] = "Perro";
// $datos = [
//     [
//         'usuario'=>'admin',
//         'clave'=>'123'
//     ],
//     [
//         'usuario'=>'otro',
//         'clave'=>'456'
//     ],
//     [
//         'usuario'=>'fulano',
//         'clave'=>'789'
//     ],
// ];
// echo $datos[2]['usuario'];
// echo "<hr>";
// var_dump($datos);
// echo "<hr>";
// foreach($datos as $d){
//     foreach($d as $valor){
//         echo $valor." ";
//     }
// }

$valores = [10, 9, 7, 6];
//echo $valores[2];
//array_push($valores, 500);//agrega al final del arreglo
//array_pop($valores);//eliminar el ultimo
//array_unshift($valores, 500);//agrega al principio
//array_shift($valores);//elimina el primero
//print_r($valores);
//echo implode(" - ", $valores);
$productos = "shampoo,acondicionador,crema";
//print_r(explode(",", $productos));
$cambiado = explode(",", $productos);
//echo $cambiado[0];
//array_reverse, sort, asort
sort($valores);
foreach($valores as $x){
 echo $x."<br>";
}
