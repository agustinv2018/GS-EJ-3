<?php

//Desarrollar un sitio web, que reciba mediante GET, dos variables. Nombre y año.
//La web debe mostrar.
//Si no se ingreso el nombre: 'Falta indicar el nombre';
//Si no se ingreso el año: 'Falta indicar el año'.
//Si se ingresaron ambos: mostrar 'Nombre: [nombreIndicado], año [añoIndicado]'



if (isset($_GET['n'], $_GET['y'])) {

    echo 'Nombre: ' . $_GET['n'] . ' , ' . 'Anio: ' . $_GET['y'];
}

if (isset($_GET['n']) == false) {

    echo 'Falta indicar el nombre';
}

if (isset($_GET['y']) == false) {

    echo 'Falta indicar el anio';
}
