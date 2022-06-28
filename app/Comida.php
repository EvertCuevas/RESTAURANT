<?php
namespace App;

class Comida
{
    private $nombre;
    public $precio;

    public function ObtenerNombre()
    {
        return $this->nombre;
    }

    public function EstablecerNombre($nuevovalor)
    {
        $nombre = $nuevovalor;
        return $nombre;
    }

    public function __construct()
    {
        $this->nombre = "s/n";
        $this->precio = 5;    
    }
}
