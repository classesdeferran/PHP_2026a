<?php
// Clase padre

class Persona
{
    protected string $nombre;
    protected string $apellido;
    protected string $fecha_nacimiento;
    protected string $DNI;
    public string $poblacion;

    public function __construct(
        string $nombre,
        string $apellido,
        string $fecha_nacimiento,
        string $DNI
    ) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $fecha_nacimiento = $fecha_nacimiento;
        $this->DNI = $DNI;
    }
}
