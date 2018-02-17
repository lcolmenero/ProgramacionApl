<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estacionamiento
 *
 * @author lcolmenero
 */
class Estacionamiento {
   private $numeroCajon;
   private $area;
   private $usuario;
   private $vehiculo = array();


   public function __construct() {
       
   }
   function getNumeroCajon() {
       return $this->numeroCajon;
   }

   function getArea() {
       return $this->area;
   }

   function setNumeroCajon($numeroCajon) {
       $this->numeroCajon = $numeroCajon;
   }

   function setArea($area) {
       $this->area = $area;
   }
   
   function getUsuario() {
       return $this->usuario;
   }

   function setUsuario($usuario) {
       $this->usuario = $usuario;
   }

      
   function add (Vehiculo $vehi){
       array_push($this->vehiculo, $vehi);
   }


}

Class Cajon extends Estacionamiento{
private $id;
}
