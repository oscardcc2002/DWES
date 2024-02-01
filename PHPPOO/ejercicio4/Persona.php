<?php
include_once 'GeneradorDNI.php';

class Persona{

    use GeneradorDNI;

 // Constantes de clase
 const INFRAPESO = -1;
 const PESO_IDEAL = 0;
 const SOBREPESO = 1;

 // Atributos de la clase
 private $nombre;
 private $edad;
 private $dni;
 private $sexo;
 private $peso;
 private $altura;
 
   // Constructor por defecto
   public function __construct($nombre = '', $edad = 0, $sexo = 'H', $peso = 0.0, $altura = 0.0) {
    $this->dni = empty($dni) ? $this->generarDNI() : $dni;
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->sexo = $this->comprobarSexo($sexo);
    $this->peso = $peso;
    $this->altura = $altura;
}

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getDni() {
        return $this->dni;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getAltura() {
        return $this->altura;
    }
    

    public function setAltura($altura) {
        $this->altura = $altura;
    }




      // Método para comprobar el sexo (privado, solo visible dentro de la clase)
      private function comprobarSexo($sexo) {
        return ($sexo === 'H' || $sexo === 'M') ? $sexo : 'H';
    }


      // Método para calcular el Índice de Masa Corporal (IMC)
      public function calcularIMC() {
        if ($this->altura > 0) {
            $imc = $this->peso / ($this->altura * $this->altura);
    
            if ($imc < 20) {
                return self::INFRAPESO;
            } elseif ($imc >= 20 && $imc <= 25) {
                return self::PESO_IDEAL;
            } else {
                return self::SOBREPESO;
            }
        } else {
            // Manejar el caso donde la altura es cero o negativa
            return 'Altura no válida';
        }
    }
    


        // Método para determinar si la persona es mayor de edad
        public function esMayorDeEdad() {
            return $this->edad >= 18;
        }




    // Método para mostrar el resultado del IMC en forma de cadena
        public function mostrarIMC() {
            $resultadoIMC = $this->calcularIMC();
    
            switch ($resultadoIMC) {
                case self::INFRAPESO:
                    return $this->nombre . ' tiene infrapeso';
                    break;
                case self::PESO_IDEAL:
                    return $this->nombre . ' está en su peso ideal';
                    break;
                case self::SOBREPESO:
                    return $this->nombre . ' tiene sobrepeso';
                    break;
                default:
                    return 'Resultado de IMC no válido';
            }
        }

        public static function consFull($nombre, $edad, $sexo, $peso, $altura) {
            return new self($nombre, $edad, $sexo, $peso, $altura);
        }
        public static function consNomEdSex($nombre, $edad, $sexo) {
            return new self($nombre, $edad, $sexo);
        }
        
        
     // Método para devolver toda la información de la persona en forma de cadena
    public function __toString() {
        return "Informacion de la persona:\n" .
            "DNI: {$this->GetDni()}\n" .
            "Nombre: {$this->nombre}\n" .
            "Edad: {$this->GetEdad()}\n" .
            "Sexo: {$this->sexo}\n" .
            "Peso: {$this->GetPeso()} Kg\n" .
            "Altura: {$this->altura} metros\n" .
            "Resultado IMC: {$this->mostrarIMC()}\n";
    }

}


?>