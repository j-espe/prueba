<?php
class Usuario {
    public $usuario;
    public $password;

    public function saludar() {
        echo 'Hola '.$this->usuario.'!<br/>';
    }
}
