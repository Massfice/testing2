<?php

  namespace Massfice\HelloWorld;
  
  require_once __DIR__.'/vendor/autoload.php';

  use Massfice\ShowString\ShowString;

  class HelloWorld {

    public function say() {
      $s = new ShowString();
      $s->show('HelloWorld');
    }

  }

?>
