<?php

namespace Yvandouenel\StatePattern;

class MotorOff implements MotorState
{
  public function start():MotorState
  {
    return new MotorOn();
  }
  public function stop():MotorState
  {
    echo "Je suis déjà arrêté.";
    return $this;
  }
}
