<?php

use Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase {
    // Pruebas para la operación de suma
    public function testSumar() {
        $cal = new Calculadora();
        $this->assertSame(6, $cal->sumar(2, 4), "2 + 4 debe dar 6");
        $this->assertSame(10, $cal->sumar(5, 5), "5 + 5 debe dar 10");
        $this->assertNotSame(8, $cal->sumar(4, 4), "3 + 4 no debe dar 8 (Incorrecto)");
    }

    // Pruebas para la operación de resta
    public function testRestar() {
        $cal = new Calculadora();
        $this->assertSame(2, $cal->restar(6, 4), "6 - 4 debe dar 2");
        $this->assertSame(-3, $cal->restar(2, 5), "2 - 5 debe dar -3");
        $this->assertSame(7, $cal->restar(10, 2), "10 - 2 debe dar 7 (Incorrecto)");
    }

    // Pruebas para la operación de multiplicación
    public function testMultiplicar() {
        $cal = new Calculadora();
        $this->assertSame(8, $cal->multiplicar(2, 4), "2 * 4 debe dar 8");
        $this->assertSame(-10, $cal->multiplicar(2, -5), "2 * -5 debe dar -10");
        $this->assertSame(17, $cal->multiplicar(3, 6), "3 * 6 debe dar 18 (Incorrecto)");
    }

    // Pruebas para la operación de división
    public function testDividir() {
        $cal = new Calculadora();
        $this->assertSame(3, $cal->dividir(6, 2), "6 / 2 debe dar 3");
        $this->assertSame(0.5, $cal->dividir(1, 2), "1 / 2 debe dar 0.5");
        $this->assertSame(5, $cal->dividir(10, 0), "División por 0 (Incorrecto)");
    }
}
?>
