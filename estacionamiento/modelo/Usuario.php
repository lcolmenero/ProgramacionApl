<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author lcolmenero
 */
class Usuario{
    protected $id;
    protected $nombreCompleto;
    protected $correoElectronico;
    protected $numTelefonoFijo;
    protected $numTelefonoMovil;
    protected $area;
    protected $numTarjetaEstacionamiento;
    protected $horaEntrada;
    protected $horaSalida;
    
    function __construct() {
        
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

    function setHoraEntrada($horaEntrada) {
        $this->horaEntrada = $horaEntrada;
    }

    function setHoraSalida($horaSalida) {
        $this->horaSalida = $horaSalida;
    }


    


}
class Alumno extends Usuario{
    private $numeroControl;
}
class Docentes extends Usuario{
    private $numeroEmpleado;
   
}
class Administrativo extends Usuario{
    private $numeroEmpleado;
    
}
class GuardiaEstacionamiento extends Usuario{
    private $numeroEmpleado;
}
class AdministradorEstacionamiento extends Usuario{
    private $numeroEmpleado;
}
