<?php

namespace Os\Web;

use Core\Dialog;
use Os\Web\HTMLButton;

class HTMLDialog extends Dialog {

    public function createButton(): HTMLButton
    {
        return new HTMLButton;
    }

}