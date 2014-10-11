<?php
require_once 'oop.php';
echo 'Hello world<br/>';
echo 'Hola mundo<br/>';
echo 'En este segundo summit quiero agregar esta l&iacute;nea.<br/>';
echo 'En este tercer commit agrego archivo con una Clase y comandos que la
utlizan.';
$usuarios = null;
$usuarios[] = new Usuario;
$usuarios[] = new Usuario;
$usuarios[] = new Usuario;
$usuarios[0]->usuario = 'juan';
$usuarios[1]->usuario = 'manolo';
$usuarios[2]->usuario = 'antonio';

foreach ($usuarios as $user) {
    $user->saludar();
}
?>
