<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author lcolmenero, hpastor, bramirez
 */
class Usuario{
    public $id;
    public $nombreCompleto;
    public $correoElectronico;
    public $numTelefonoFijo;
    public $numTelefonoMovil;
    public $area;
    public $numTarjetaEstacionamiento;
    public $CodigoBarras;
	private $Registro;
    
    function __construct() {
    
	function setRegistro( $registro){
		$this->registro;
	}
	
    }
    function getId() {
        return $this->id;
    }

    function getNombreCompleto() {
        return $this->nombreCompleto;
    }

    function getCorreoElectronico() {
        return $this->correoElectronico;
    }

    function getNumTelefonoFijo() {
        return $this->numTelefonoFijo;
    }

    function getNumTelefonoMovil() {
        return $this->numTelefonoMovil;
    }

    function getArea() {
        return $this->area;
    }

    function getNumTarjetaEstacionamiento() {
        return $this->numTarjetaEstacionamiento;
    }

    function getHoraEntrada() {
        return $this->horaEntrada;
    }

    function getHoraSalida() {
        return $this->horaSalida;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombreCompleto($nombreCompleto) {
        $this->nombreCompleto = $nombreCompleto;
    }

    function setCorreoElectronico($correoElectronico) {
        $this->correoElectronico = $correoElectronico;
    }

    function setNumTelefonoFijo($numTelefonoFijo) {
        $this->numTelefonoFijo = $numTelefonoFijo;
    }

    function setNumTelefonoMovil($numTelefonoMovil) {
        $this->numTelefonoMovil = $numTelefonoMovil;
    }

    function setArea($area) {
        $this->area = $area;
    }

    function setNumTarjetaEstacionamiento($numTarjetaEstacionamiento) {
        $this->numTarjetaEstacionamiento = $numTarjetaEstacionamiento;
    }

    function setCodigoBarras($CodigoBarras) {
        $this->CodigoBarras = $CodigoBarras;
    }

}
class Alumno extends Usuario{
    private $numeroControl;
}

class Empleado extends Usuario{
    private $numeroEmpleado;
	private $puesto;
	private $noExtension;
}
