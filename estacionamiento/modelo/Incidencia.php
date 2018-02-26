<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Incidencia
 *
 * @author lcolmenero, hpastor, bramirez
 */
class Incidencia {
    private $idIncidencia;
    private $descripcion;Usuario
	private $fechaIncidencia;
    private $usuario;
	private $registro;
	
    function __construct() {
        
    }
	
	function setUsuario( $usuario){
		$this->usuario;
	}
	
	function setRegistro( $registro){
		$this->registro;
	}
	
    function getNumIncidencia() {
        return $this->numIncidencia;
    }

    function getDescripcion() {
        return $this->descripcion;
    }
	
	function getFechaIncidencia() {
        return $this->fechaIncidencia;
    }

    function setNumIncidencia($numIncidencia) {
        $this->numIncidencia = $numIncidencia;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

	function setFechaIncidencia($fechaIncidencia) {
        $this->fechaIncidencia = $fechaIncidencia;
    }

}
