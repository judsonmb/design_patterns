<?php

namespace Os\Windows;

use Core\Interfaces\Button;

class WindowsButton implements Button{

    public function render()
    {
        echo "Windows button created!";
    }

    public function onClick()
    {
        echo "Confirmed!";
    }

}