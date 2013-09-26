<?php

function urlify($str = '', $glue = '-') {
    $str = Unidecode::decode($str);
    $str = preg_replace('/[^a-zA-Z0-9 _-]/', '', $str);
    $str = preg_replace('/\s+/', $glue, trim($str));

    return $str;
}
