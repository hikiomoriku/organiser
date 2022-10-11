<?php
CONST FILENAME = './tips.json';
function readTips () {
    $readtips = file_get_contents (FILENAME);
    $a = json_decode ($readtips);
    return $a;
}
function saveTips ($tips) {
    $json = json_encode ((array) $tips, JSON_UNESCAPED_UNICODE); 
    return file_put_contents (FILENAME, $json);
    return $tips;
}