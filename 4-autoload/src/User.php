<?php
namespace Diginamic\Test;
class User {
  private string $firstname;
  function __construct($firstname)
  {
    $this->firstname = $firstname;
  }
  public function getName():string {
    return $this->firstname;
  }
}