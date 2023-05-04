<?php

namespace Yvandouenel\StatePattern;

class MotorOn implements MotorState
{
  public function start():MotorState
  {
    echo "Je suis déjà démarré.";
    return $this;
  }
  public function stop():MotorState
  {
    return new MotorOff();
  }
}
