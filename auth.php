<?php
if (!isset($_COOKIE["xxx"]) || $_COOKIE["xxx"] != 'Hell_staff') {
    header('Location: /');
    exit(0);
}
