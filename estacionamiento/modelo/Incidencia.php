<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Incidencia
 *
 * @author lcolmenero
 */
class Incidencia {
    private $numIncidencia;
    private $descripcion;
    
    function __construct() {
        
    }
    function getNumIncidencia() {
        return $this->numIncidencia;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setNumIncidencia($numIncidencia) {
        $this->numIncidencia = $numIncidencia;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }


}
