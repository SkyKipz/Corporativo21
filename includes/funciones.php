<?php

require "app.php";

function incluirTemplate (string $nombre, bool $inicio = false ) {
    include TEMPLATES_URL . "/${nombre}.php" ;
}

function incluirTemplate2 (string $nombre, bool $index = false ) {
    include TEMPLATES_URL . "/${nombre}.php" ;
}

function estaAutenticado(): bool {
    session_start();
    $auth = $_SESSION['login'];

    if($auth) {
        return true;
    }
    return false;
}
