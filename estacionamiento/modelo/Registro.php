<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Registro
 *
 * @author lcolmenero, hpastor, bramirez
 */
class Registro {
   public $idRegistro;
   public $numeroCajon;
   public $horaEntrada;
   public $horaSalida;
   public $noTargeta;
   public $guardia;
   Private $vehiculo;

   public function __construct() {
       
   }
   
   function setVehiculo( $vehiculo){
		$this->vehiculo;
	}
	
   function getIdRegistro() {
       return $this->idRegistro;
   }

   function setIdRegistro($idRegistro) {
       $this->idRegistro = $idRegistro;
   }

   function getNumeroCajon() {
       return $this->numeroCajon;
   }

   function setNumeroCajon($numeroCajon) {
       $this->numeroCajon = $numeroCajon;
   }

   function getHoraEntrada() {
       return $this->horaEntrada;
   }

   function setIdRegistro($horaEntrada) {
       $this->horaEntrada = $horaEntrada;
   }

   function getHoraSalida() {
       return $this->horaSalida;
   }

   function setHoraSalida($horaSalida) {
       $this->horaSalida = $horaSalida;
   }
   
   function getNoTargeta() {
       return $this->noTargeta;
   }

   function setNoTargeta($noTargeta) {
       $this->noTargeta = $noTargeta;
   }
   
   function getGuardia() {
       return $this->idRegistro;
   }

   function setGuardia($guardia) {
       $this->guardia = $guardia;
   }
}

class Cajon extends Registro{
	private $idCajon;
}
