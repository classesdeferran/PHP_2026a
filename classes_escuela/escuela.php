<?php

// Evitar la conversión de tipos:
declare(strict_types=1);


class Profesor
{
    private string $nombre;
    private string $apellido;
    private string $especialidad;

    // Sintaxis anterior a PHP v8
    public function __construct(string $nombre, string $apellido, string $especialidad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->especialidad = $especialidad;
    }

    public function nombre_profesor()
    {
        return "$this->nombre $this->apellido";
    }
}

class Curso
{
    private static int $ultimo_codigo = 1000;
    private int $codigo_curso;
    // private string $nombre;
    // private string $lenguaje;
    // private int $duracion;
    private float $precio_hora = 20;
    private ?Profesor $profesor = null;



    // Desde PHP v8 : promoted properties (no hace falta declarar las variables del constructor)
    public function __construct(private string $nombre, private string $lenguaje, private int $duracion = 60)
    {
        // incrementar el mcódigo anterior
        // self::$ultimo_codigo++;
        // asignar el código a la variable dinámica
        // $this->codigo_curso = self::$ultimo_codigo;
        // Lo mismo en una linea
        $this->codigo_curso = ++self::$ultimo_codigo;
    }

    public function asignar_profesor(Profesor $professor)
    {
        $this->profesor = $professor;
    }

    public function mostrar_info()
    {
        $nombre_profesor = "no hay profesor asignado";
        if (!is_null($this->profesor)) {
            $nombre_profesor = $this->profesor->nombre_profesor();
        }
        $info = "<br>[$this->codigo_curso] Nombre: " . $this->nombre;
        $info .= "<br>Lenguaje: " . $this->lenguaje . "<br>Duración: ";
        $info .= $this->duracion . "<br>" . "Profesor : $nombre_profesor <hr><br>";
        return $info;
    }

    public function set_precio(float $precio_hora)
    {
        $this->precio_hora = $precio_hora;
    }

    public function get_nombre()
    {
        return $this->nombre;
    }

    public function coste_curso()
    {
        return $this->precio_hora * $this->duracion;
    }
}

$profesor_1 = new Profesor("Steve", "Jobs", "Backend");
$profesor_2 = new Profesor("Ada", "Lovelace", "Frontend");


$curso_PHP = new Curso("Curso básico de backend", "PHP");
$curso_PHP->asignar_profesor($profesor_1);

echo $curso_PHP->mostrar_info();

$curso_Javascript = new Curso("Curso básico de Javascript", "Javascript", 90);
$curso_Javascript->asignar_profesor($profesor_2);
echo $curso_Javascript->mostrar_info();

$curso_HTML = new Curso("Curso básico de HTML", "HTML", 45);
echo $curso_HTML->mostrar_info();

// $curso_2 = new Curso (2, "PHP");
// echo $curso_2->mostrar_info();



class Alumno
{
    // propiedades -> atributos
    private string $nombre;
    private string $apellido;
    private int $edad;
    private int $codigo_alumno;
    private array $cursos_matriculados;

    // funciones = acciones -> métodos

    public function __construct(string $nombre, string $apellido, int $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function nombre_completo()
    {
        return "<br>Te llamas " . $this->nombre . " " . $this->apellido . " y tienes " . $this->edad . "<br>";
    }

    // setters & getters
    public function set_nombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function set_apellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function get_nombre()
    {
        return $this->nombre;
    }

    public function get_apellido()
    {
        return $this->apellido;
    }

    public function matricular_curso(Curso $curso)
    {
        $this->cursos_matriculados[] = $curso;
        $mensaje = "<br>Alumno " . $this->get_nombre() . " " . $this->get_apellido();
        $mensaje .= " matriculado de " . $curso->get_nombre() . "<br><hr>";
        echo $mensaje;
    }

    public function mostrar_expediente()
    {
        $expediente = "<br>Nombre : " . $this->nombre_completo() . "<br>";
        foreach ($this->cursos_matriculados as $curso) {
            $expediente .= $curso->mostrar_info();
        }
        // $precio_curso = $this->precio
        // $expediente .= "Precio del curso: ".(
        return $expediente;
    }

    public function pagar_cursos()
    {
        if (empty($this->cursos_matriculados)) {
            return "<br>Alumno: " . $this->get_nombre() . " " . $this->get_apellido() . "<br>Aún no se ha matriculado de níngún curso<br><hr><br>";
        } else {
            $mensajes = "Alumno: " . $this->get_nombre() . " " . $this->get_apellido();
            $coste_total = 0;
            foreach ($this->cursos_matriculados as $curso) {
                $mensajes .= "<br>" . $curso->get_nombre() . ", precio: " . $curso->coste_curso() . " €.";
                $coste_total += $curso->coste_curso();
            }
            $mensajes .= "<br>Total : " . $coste_total . " €<br><hr><br>";
            return $mensajes;
        }
    }
}

// Instancia de la clase Alumno = OBJETO
$alumno_1 = new Alumno("Maria", "Pou", 24);
// echo $alumno_1->nombre_completo();

$alumno_1->matricular_curso($curso_PHP);
$alumno_1->matricular_curso($curso_HTML);
echo $alumno_1->mostrar_expediente();
echo $alumno_1->pagar_cursos();


$alumno_1->set_nombre('Joan');
$alumno_1->set_apellido("Garcia");
// echo $alumno_1->nombre_completo();

// Instancia de la clase Alumno = OBJETO
$alumno_2 = new Alumno("Peter", "Jones", 22);
// echo $alumno_2->nombre_completo();
// echo "<br> El alumno 2 se llama " . $alumno_2->get_nombre();

$curso_Javascript->set_precio(10);
echo $alumno_2->pagar_cursos();
$alumno_2->matricular_curso($curso_Javascript);
echo $alumno_2->pagar_cursos();
