<?php
// Clase Bebida que hereda de Artículo

class Bebida extends Articulo {
    public string $tamaño;
    public string $temperatura;

    public function __construct(string $nombre, float $precio, bool $disponibilidad, string $categoria, string $tamaño, string $temperatura) {
        parent::__construct($nombre, $precio, $disponibilidad, $categoria);
        $this->tamaño = $tamaño;
        $this->temperatura = $temperatura;
    }
}
?>