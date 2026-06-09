<?php
require_once "Persona.php";

class Cliente extends Persona
{
    private string $codigo_cliente;
    private bool $seguro_hogar;

    public function __construct(
        string $nombre,
        string $apellido,
        string $fecha_nacimiento,
        string $DNI,
        string $codigo_cliente
    ) {
        parent::__construct($nombre, $apellido, $fecha_nacimiento, $DNI);
        $this->codigo_cliente = $codigo_cliente;
    }

    public function mostrar_datos()
    {
        echo "<br>El cliente $this->nombre $this->apellido tiene el código $this->codigo_cliente";
        try {
            if ($this->seguro_hogar) {
                echo "<br>Tiene seguro de hogar";
            } else {
                echo "<br>No tiene seguro de hogar";
            }
        } catch (Error $e) {
            echo "<br>No hay datos del seguro del hogar";
        }
    }

    public function set_seguro_hogar($valor)
    {
        $this->seguro_hogar = $valor;
    }
}

$cliente_1 = new Cliente("Fulanito", "Menganitez", "2000-01-01", "12345678A", "A");
$cliente_1->mostrar_datos();
$cliente_1->poblacion = "París";

$cliente_1->set_seguro_hogar(0);
$cliente_1->mostrar_datos();
