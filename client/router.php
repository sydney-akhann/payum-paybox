<?php

if ($_SERVER['REQUEST_URI'] === '/') {
    require 'prepare.php';
}
else {
    return false;
}
