<?php

namespace Os\Linux;

use Core\Interfaces\Button;

class LinuxButton implements Button{

    public function render()
    {
        echo "Linux button created!";
    }

    public function onClick()
    {
        echo "Confirmed!";
    }

}