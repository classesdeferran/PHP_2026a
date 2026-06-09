<?php

/*
La programación Orientada a Objetos (POO = OOP)
se basa en

-- Los métodos y atributos del padre se pueden sobreescribir.
-- HERENCIA
---- En PHP no existe la herencia múltiple.
---- Indicaremos en la clase hija "implements Nombre_clase_padre"
-- POLIMORFISMO
---- Para definir métodos y propiedades que se pueden usar en diferentes clases
-- ABSTRACCIÓN

-- ENCAPSULAMIENTO



*/

class Animal
{
    protected string $especie = "gallina";

    public function comer()
    {
        echo "El animal de especie $this->especie está comiendo<br>";
    }
}

class Perro extends Animal
{

    private array $medicamentos;
    // public function comer()
    // {
    //     echo "El perro está comiendo<br>";
    // }

    public function ladrar()
    {
        echo "El perro está ladrando<br>";
    }
}

class Gato extends Animal
{
    protected string $especie = "gato";
}

$rufus = new Perro();
$rufus->ladrar();
// $rufus->comer();
// $rufus->especie= "elefante";
$rufus->comer();

$mishi = new Gato();
$mishi->comer();


abstract class FiguraGeometrica
{

    private float $lado;
    abstract public function calcularArea(
        
    );
}

class Rectangulo extends FiguraGeometrica
{
    public float $lado1;
    public float $lado2;
    #[Override]
    public function calcularArea()
    {
        return $this->lado1 * $this->lado2;
    }
}

class Circulo extends FiguraGeometrica
{
    public float $radio;

    public function calcularArea()
    {
        return pi() * $this->radio * $this->radio;
    }
}

class Triangulo extends FiguraGeometrica
{
    private float $base;
    private float $altura;

    public function __construct(float $base, float $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    #[Override]
    public function calcularArea()
    {
        return $this->base * $this->altura / 2;
    }
}

$triangulo = new Triangulo(3, 4);
echo "El área del triangulo es " . $triangulo->calcularArea();

$figura = new FiguraGeometrica();
