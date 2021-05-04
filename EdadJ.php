<?php

//EJERCICIO 
//Creamos un formulario que pida la edad 
//Crea un condiconales que segun la edad muestre si es 
//Mayor de edad,un recien nacido, un niño(a), un adolecente, un adulto(a)
//un señor(a), o un anciano 04-05-2021

echo "EJERCICIO PARA CONOCER LOS GRUPOS ETAREOS";
$edad = (int) $_REQUEST["edad"];

if ($edad > 0 && $edad <= 2){
    echo <<<RecienNacido
    <b><br><br>Esta edad de $edad años es de un recien nacido</b>
RecienNacido; 
}

elseif ($edad > 2 && $edad <= 11){
    echo <<<EdadNiño
    <b><br><br>Esta edad de  $edad años es de un Niño</b>
EdadNiño;
}
elseif ($edad > 11 && $edad <= 18){
    echo <<<EdadAdolescente
    <b><br><br>Esta edad de $edad años es de un Adolescente</b>
EdadAdolescente;
}
elseif ($edad > 19 && $edad <= 58){
    echo <<<EdadAdulto
    <b><br><br>Esta edad de  $edad años es de un Adulto</b>
EdadAdulto;
}

elseif ($edad > 59 && $edad <= 120){
    echo <<<EdadAnciano
    <b><br><br>Esta edad de  $edad años es de un Anciano</b>
EdadAnciano;
}

else{
    echo <<<GrupoEtareo
    <b><br><br>Esta edad de  $edad años está fuera de los grupos etáreos</b>
GrupoEtareo;
}
echo " <br><br><br><br><br><a href='index.html'>Volver a Ejecutar</a>"
?>