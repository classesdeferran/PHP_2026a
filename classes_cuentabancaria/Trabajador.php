<?php
require_once "Persona.php";

class Trabajador extends Persona
{
    private string $codigo_trabajador;
    private array $beneficios;
    private float $sueldo;
    private float $retenciones;



    public function __construct(
        string $nombre,
        string $apellido,
        string $fecha_nacimiento,
        string $DNI,
        string $codigo_trabajador
    ) {
        parent::__construct($nombre, $apellido, $fecha_nacimiento, $DNI);
        $this->codigo_trabajador = $codigo_trabajador;
    }

    public function mostrar_datos()
    {
        echo "El cliente $this->nombre $this->apellido tiene el código $this->codigo_trabajador";
    }

    public function asignar_sueldo($sueldo)
    {
        return $this->sueldo = $sueldo;
    }
}

$trabajador_1 = new Trabajador("Fulanito", "Menganitez", "2000-01-01", "12345678A", "A");
$trabajador_1->mostrar_datos();
