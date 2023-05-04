<?php

namespace Yvandouenel\StatePattern;

interface MotorState
{
  public function start() : MotorState;
  public function stop() : MotorState;
}
