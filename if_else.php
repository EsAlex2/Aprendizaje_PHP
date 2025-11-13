<?php 

$time = date("H");

if($time < "20") {
    echo "Que tengas un buen dia ($time)"; //if/else convencional
}else{
    echo "Que tengas buenas noches";
}
/*----------------------------------------------------------*/
$a = 5; 

if ($a < 10) $b = "if corto"; //if corto

echo $b;

/*----------------------------------------------------------------------------*/

$c = 13;

$e = $c < 10 ? "Verdadero" : "Falso"; //operador ternario ? condicion1 : condicion2

echo $e ;

/*----------------------------------------------------------------------------*/

$edades = 25;

if ($edades > 18) {
    echo "Eres mayor de edad";
    if ($edades > 18) {
        echo "Puedes manejar camionetas"; //if anidados
    }else{
        echo "No tienes edad suficiente para realizar esa accion";
    }
}

/*-------------------------------------------------------------------------------*/

$rolUser = array(
    "1" => "admin",
    "2" => "user",
    "3" => "client"
);  //declaracion switch: para realizar diferentes acciones basadas en diferentes condiciones

switch ($rolUser = "1") {
    case"1":
        echo "Usted ha seleccionado perfil de administrador";
    break;

    case "2":
        echo "Usted ha seleccionado perfil de usuario";
    break;

    case "3":
        echo "Usted ha seleccionado perfil de cliente";
    break;

    default: 
    echo "Debe seleccionar un perfil";
}
 


?>