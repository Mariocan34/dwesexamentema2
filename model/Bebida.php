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
}
?>