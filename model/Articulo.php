<?php
// Clase Artículo

class Articulo {
    public string $nombre;
    public float $precio;
    public bool $disponibilidad;
    public string $categoria;

    public function __construct(string $nombre, float $precio, bool $disponibilidad, string $categoria) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponibilidad = $disponibilidad;
        $this->categoria = $categoria;
    }
}
?>