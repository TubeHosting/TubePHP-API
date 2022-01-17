<?php
declare(strict_types=1);
foreach (glob(__DIR__ . "/../src/Objects/*.php") as $file) {
    include_once  $file;
}
foreach (glob(__DIR__ . "/../src/Exceptions/*.php") as $file) {
    include_once    $file;
}
require_once __DIR__ . "/../src/TubeAPI.php";
