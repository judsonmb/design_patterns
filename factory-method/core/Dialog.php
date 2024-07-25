<?php

namespace Core;

use Core\Interfaces\Button;

abstract class Dialog {

    abstract function createButton(): Button;

    public function render() 
    {
        $okButton = $this->createButton();
        $okButton->onClick();
        $okButton->render();
    }
}