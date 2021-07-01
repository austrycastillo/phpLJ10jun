<?php
/*
expresiones regulares
literal /palabra/
*/
// $exp = "/amor/";
// $exp = "/[Aa]mor/";
// $exp = "/[a-zA-Z]/";
// $exp = "/[0-9]/";
// $exp = "/^[0-9]{3,6}$/";
// $exp = "/^\d{3,6}$/";
$exp = "/^\d{3}$/";
$texto = "12345";
if (preg_match($exp, $texto)) {
    echo "SI";
}else{
    echo "NO";
}
