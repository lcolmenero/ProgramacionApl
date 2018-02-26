<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vehiculo
 *
 * @author lcolmenero, hpastor, bramirez
 */
class Vehiculo {
    public $idVehiculo;
	public $numPlaca;
    public $marca;
    public $modelo;
    public $color;
    public $usuario;
            
     function __construct() {
        
    }
    function getNumPlaca() {
        return $this->numPlaca;
    }

    function getMarca() {
        return $this->marca;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getColor() {
        return $this->color;
    }

    function setNumPlaca($numPlaca) {
        $this->numPlaca = $numPlaca;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setColor($color) {
        $this->color = $color;
    }
    
    function getUsuario() {
        return $this->usuario;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

}
class Carro extends Vehiculo{
    private $licenciaConducir;
    private $tarjetaCirculacion;
}
class Moto extends Vehiculo{
    private $tarjetaCirculacion;
}
class Bicicleta extends Vehiculo{
	private $descripcion;
}
class Cuatrimoto extends Vehiculo{
    private $licenciaConducir;
    private $tarjetaCirculacion;
}