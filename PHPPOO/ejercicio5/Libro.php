<?php

include_once 'Publicacion.php';
include_once 'Prestable.php';

class Libro extends Publicacion implements Prestable {
    private $prestado = false;

    public function estaPrestado() {
        return $this->prestado;
    }

    public function prestar() {
        if (!$this->prestado) {
            $this->prestado = true;
            echo "Se ha prestado el libro '$this->titulo'.<br>" . "\n";
        } else {
            echo "No se ha podido prestar, el libro '$this->titulo' ya está prestado.<br>" . "\n";
        }
    }

    public function devuelve() {
        if ($this->prestado) {
            $this->prestado = false;
            echo "Se ha devuelto el libro '$this->titulo'.<br>" . "\n";
        }
    }

    public function mostrarPrestado() {
        if ($this->prestado) {
            echo "El libro '$this->titulo' está prestado<br>" . "\n";
        } else {
            echo "El libro '$this->titulo' no está prestado<br>" . "\n";
        }
    }

    public function __toString() {
        $estadoPrestamo = $this->prestado ? "prestado" : "no prestado";
        return parent::__toString() . " ($estadoPrestamo)";
    }
}


