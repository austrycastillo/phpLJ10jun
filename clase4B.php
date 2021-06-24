<?php
$usuarios = [
    [
        'email' => 'juan@correo.com',
        'clave' => '123'
    ],
    [
        'email' => 'pepe@correo.com',
        'clave' => '456'
    ],
    [
        'email' => 'ana@correo.com',
        'clave' => '789'
    ]
];
$email = $_POST['email'];
$pass = $_POST['pass'];
$flag = false;
foreach ($usuarios as $dato) {
    //var_dump($dato);
    //echo $dato['email'];
    if ($email == $dato['email'] && $pass == $dato['clave']) {
        $flag = true;
    }
}
if ($flag) {
    echo "<strong style=color:green>Bienvenido</strong>";
} else {
    echo "<strong style=color:red>Datos incorrectos</strong><br><a href=clase4.php>volver a intentar</a>";
}
