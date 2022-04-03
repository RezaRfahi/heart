<?php


function CleanChar($char){
    $char=stripcslashes($char);
    $char=trim($char);
    $char=$char.' :) ';
    return $char;
}