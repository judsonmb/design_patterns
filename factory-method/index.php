<?php

require_once __DIR__ . '/vendor/autoload.php';

use Os\Linux\LinuxDialog;
use Os\Web\HTMLDialog;
use Os\Windows\WindowsDialog;

$os = 'Linux';

match ($os) {
    "Windows" => $dialog = new WindowsDialog(),
    "Web" => $dialog = new HTMLDialog(),
    "Linux" => $dialog = new LinuxDialog(),
    default => throw new Exception("Error! Unknown operating system."),
};

$dialog->render();

?>