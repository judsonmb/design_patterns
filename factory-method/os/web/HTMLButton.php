<?php

namespace Os\Web;

use Core\Interfaces\Button;

class HTMLButton implements Button{

    public function render()
    {
        echo "HTML+CSS button created!";
    }

    public function onClick()
    {
        echo "Submit now!!";
    }

}