<?php


function CleanChar($char){
    $char=stripcslashes($char);
    $char=$char.' :) ';
    return $char;
}