<?php

namespace Os\Linux;

use Core\Dialog;
use Os\Linux\LinuxButton;

class LinuxDialog extends Dialog {

    public function createButton(): LinuxButton
    {
        return new LinuxButton;
    }

}