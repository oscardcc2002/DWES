<?php

include_once 'Imprimible.php';

abstract class Publicacion {
    protected $isbn;
    protected $titulo;
    protected $anoPublicacion;

    public function __construct($isbn, $titulo, $anoPublicacion = 2024) {
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->anoPublicacion = $anoPublicacion;
    }

    public function __toString() {
        return "ISBN: $this->isbn, título: $this->titulo, año de publicación: $this->anoPublicacion";
    }
}