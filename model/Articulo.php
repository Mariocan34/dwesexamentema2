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

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function getPrecio() {
        return $this->precio;
    }

     public function setPrecio(float $precio){
        $this->precio = $precio;
        return $this;
    }

    public function getDisponibilidad() {
        return $this->disponibilidad;
    }

    public function setDisponibilidad(bool $disponibilidad) {
        $this->disponibilidad = $disponibilidad;
        return $this;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria(string $categoria) {
        $this->categoria = $categoria;
        return $this;
    }

    public function __toString(){
        return "$this->nombre. $this->precio";
    }
}
?>