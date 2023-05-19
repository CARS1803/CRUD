<?php
require 'Conexion.php';

class Producto extends Conexion{
    public $nombre;
    public $apellido;
    public $fecha_de_nacimiento;
    public $telefono;
    public $correo;


    public function __construct($args = [] )
    {
        $this->nombre = $args['nombre'] ?? null;
        $this->apellido = $args['apellido'] ?? '';
        $this->fecha_de_nacimiento = $args['fecha_de_nacimiento'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->correo = $args['correo'] ?? '';

    }

    public function guardar(){
        $sql = "INSERT INTO alumnos(nombre, apellido, fecha_de_nacimiento, telefono, correo) values('$this->nombre','$this->apellido','$this->fecha_de_nacimiento','$this->telefono','$this->correo')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
