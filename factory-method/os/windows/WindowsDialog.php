<?php

namespace Os\Windows;

use Core\Dialog;
use Os\Windows\WindowsButton;

class WindowsDialog extends Dialog {

    public function createButton(): WindowsButton
    {
        return new WindowsButton;
    }

}