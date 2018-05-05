<?php

class Calculadora {

  private $imc;
  private $kilos;
  private $meters;
  private $centimeters;

  function __construct() {
    $this->imc = 0;
    $this->kilos = 0;
    $this->meters = 0;
    $this->centimeters = 0;
  }

  //getter and setter

   public function setKilos($parametro_kilos){
     $this->kilos = $parametro_kilos;
  }

  public function setMeters($parametro_meters){
    $this->meters = $parametro_meters;
  }

 public function setCentimeters($parametro_centimeters){
    $this->centimeters = $parametro_centimeters;
  }

//operações

public function getImc(){
  $this->height = (($this->meters * 100) + $this->centimeters) / 100;
  $this->imc = $this->kilos / ($this->height * $this->height);

  if ($this->imc  < 18.5) {

    echo  'Você esta com a categoria: Abaixo do peso!<br />';
  } else if ($this->imc  >= 18.5 && $this->imc  < 24.9) {
    echo  'Você esta com a categoria: Peso ideal!<br />';
  } else if ($this->imc  >= 25 && $this->imc  < 29.9) {
    echo  'Você esta com a categoria: Sobrepeso!<br />';
  } else if ($this->imc  >= 30 && $this->imc  < 34.9) {
    echo  'Você esta com a categoria: Obesidade Moderada!<br />';
  } else if ($this->imc  >= 35 && $this->imc  < 39.9) {
    echo  'Você esta com a categoria: Obesidade Severa!<br />';
  } else  {
    echo  'Você esta com a categoria: Obesidade Mórbida!<br />';
  }
  return $this->imc;
}

}


?>
