<?php


$palabras = array("Eli","Itzel","Sebastian");

if($_REQUEST["palabra0"] == $palabras[0]){
    echo "La palabra ingresada es correcta <br>";
}else{
    echo "La palabra no es correcta es <br>";
}

if($_REQUEST["palabra1"] == $palabras[1]){
    echo "La palabra ingresada es correcta <br>";
}else{
    echo "La palabra no es correcta es <br>";
}

if($_REQUEST["palabra2"] == $palabras[2]){
    echo "La palabra ingresada es correcta <br>";
}else{
    echo "La palabra no es correcta es <br>";
}



?>

