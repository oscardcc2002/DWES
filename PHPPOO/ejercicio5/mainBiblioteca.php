<?php
/**
 * @author Silvia Vilar
 * Ej5UD8 - mainBiblioteca.php
 */
include_once 'Libro.php';
include_once 'Revista.php';
  $libro1 = new Libro("123456", "La Ruta Prohibida", 2007);
  $libro2 = new Libro("112233", "Los Otros", 2016);
  $libro3 = new Libro("456789", "La rosa del mundo", 1995);
  $revista1 = new Revista("444555", "Año Cero", 2019, 344);
  $revista2 = new Revista("002244", "National Geographic", 2003, 255);
  print($libro1). "\n";
  print($libro2). "\n";
  print($libro3). "\n";
  print($revista1). "\n";
  print($revista2). "\n";
  $libro2->prestar();
  $libro2->mostrarPrestado();
  $libro2->prestar();
  $libro2->devuelve();
  $libro2->mostrarPrestado();
  $libro3->prestar();
  print($libro2). "\n";
  print($libro3). "\n";
?>