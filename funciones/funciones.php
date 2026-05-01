<?php
/*
function nombre_funcion($parametro/s){
    codigo a ejecutar;
    return $algo;
}
*/
/*
$precio = $_GET['precio'];
$descuento = $_GET['desc'];

function calcularPrecio($presioBase, $desc){
    $descuento = $presioBase * ($desc/100);
    $precioTotal = $presioBase - $descuento;
    return $precioTotal;
}


$desc = calcularPrecio(100, 10);
echo "El Precio final es: " . $desc . "<br>";

$desc2 = calcularPrecio(1500, 20);
echo "El Precio final es: " . $desc2 . "<br>";

$desc3 = calcularPrecio($precio, $descuento);
echo "El Precio final es: " . $desc3;
*/
/*
function ganancia($precioCosto,$precioVenta){
    $ganancia = $precioVenta - $precioCosto;
    $mensaje = "La Ganancia es de: " . $ganancia . "<br>";
    return $mensaje;
}

$ver_ganancia = ganancia(1500, 2300);
echo $ver_ganancia . "<br>";

$pais = "Argentina";

function verPais(){
    global $pais;
    return "el país es: " . $pais;
}

$mostrar = verPais();
echo $mostrar;

function verNombre(){
    $nombre = "Juan";
    return $nombre;
}

echo $nombre;

*/
/*
$_GET['nombre'];

echo "<pre>";
var_dump($_GET['precio']);
echo"</pre>";
*/
/*
session_start();
$_Session['usuario'] = "isei4030";
echo $_Session['usuario'];


setcookie(nombre, valor, tiempo, ruta); 


setcookie("usuario", "Juan", time()+86400, "/");
echo $_COOKIE['usuario'];

*/
/*
$ip_usuario = $_SERVER['REMOTE_ADDR'];
echo $ip_usuario . "<br>";

$pagina_actual = $_SERVER['PHP_SELF'];
echo $pagina_actual . "<br>";
 
$host = $_SERVER['HTTP_HOST'];
echo $host;

if($_SERVER['REQUEST_METHOD'] == "POST"){

}
*/