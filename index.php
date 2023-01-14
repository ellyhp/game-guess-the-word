<?php

    $palabras = array("Eli","Itzel","Sebastian");
    $palabrasDesordenadas = array();

    for ($i=0; $i <count($palabras); $i++) { 
        $palabras[$i] = str_shuffle($palabras[$i]); 
    }

    print_r($palabrasDesordenadas);


    echo "
    <form action='analisis.php'>
        <input type='text' name='palabra0'>
        <input type='text' name='palabra1'>
        <input type='text' name='palabra2'>
        <button type='submit'> Enviar </button>
    </form>
    ";

?>

