<?php

// Revista.php

include_once 'Publicacion.php';
include_once 'Prestable.php';

class Revista extends Publicacion implements Prestable {
    private $numeroPublicacion;
    private $prestado = false;

    public function __construct($isbn, $titulo, $anoPublicacion, $numeroPublicacion) {
        parent::__construct($isbn, $titulo, $anoPublicacion);
        $this->numeroPublicacion = $numeroPublicacion;
    }

    public function estaPrestado() {
        return $this->prestado;
    }

    public function prestar() {
        if (!$this->prestado) {
            $this->prestado = true;
            echo "Se ha prestado la revista '{$this->titulo}'.<br>" . "\n";
        } else {
            echo "No se ha podido prestar, la revista '{$this->titulo}' ya está prestada.<br>" . "\n";
        }
    }

    public function devuelve() {
        if ($this->prestado) {
            $this->prestado = false;
            echo "Se ha devuelto la revista '{$this->titulo}'.<br>" . "\n";
        }
    }

    public function mostrarPrestado() {
        if ($this->prestado) {
            echo "La revista '{$this->titulo}' está prestada<br>" . "\n";
        } else {
            echo "La revista '{$this->titulo}' no está prestada<br>" . "\n";
        }
    }

    public function __toString() {
        return parent::__toString() . ", número: {$this->numeroPublicacion}";
    }
}


