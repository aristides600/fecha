<?php
date_default_timezone_set('America/Argentina/Ushuaia');
$prueba = date("Y/m/d");
echo "Hoy es: ".date("d/m/Y");
echo "<br/>";

if ($prueba < "2020/12/01")
{
echo "Sitio web en mantenimiento hasta el 01/12/2020";
}
else
{
echo "Bienvenido a nuestro sitio!";
}
?>