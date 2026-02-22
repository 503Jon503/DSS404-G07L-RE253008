<?php

class Universidad {

    private $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function obtenerNombre() {
        return $this->nombre;
    }

    public function mostrarCarreras() {

        $carreras = array(
            "Ingeniería en Sistemas" => "5 años",
            "Licenciatura en Administración" => "4 años",
            "Arquitectura" => "5 años",
            "Diseño Gráfico" => "4 años"
        );

        return $carreras;
    }

    public function mostrarInformacion() {
        return "Nuestra institución se dedica a la formación integral de profesionales con valores éticos y excelencia académica.";
    }
}