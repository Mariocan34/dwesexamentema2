<?php
// Clase Bebida que hereda de Artículo

class Bebida extends Articulo {
    public string $size;
    public string $temperatura;

    public function __construct(string $nombre, float $precio, bool $disponibilidad, string $categoria, string $size, string $temperatura) {
        parent::__construct($nombre, $precio, $disponibilidad, $categoria);
        $this->size = $size;
        $this->temperatura = $temperatura;
    }

    public function getsize() {
        return $this->size;
    }

    public function setsize(string $size) {
        $this->size = $size;
    }

    public function getTemperatura() {
        return $this->temperatura;
    }

    public function setTemperatura(string $temperatura){
        $this->temperatura = $temperatura;
    }

    public function __toString() {
       return "$this->nombre . $this->precio";
    }
}
?>