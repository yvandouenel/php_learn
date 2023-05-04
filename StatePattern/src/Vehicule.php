<?php
namespace Yvandouenel\StatePattern;
class Vehicule {
  private MotorState $state_motor;
  function __construct(){
    $this->state_motor = new MotorOff();
  }
  public function start(){
    $this->state_motor = $this->state_motor->start();
  }
  public function stop(){
    $this->state_motor = $this->state_motor->stop();
  }
}