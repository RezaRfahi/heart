<?php


namespace heart;


class Love
{
public $girl;

function __construct($girl)
{
    $this->girl=$girl;
}

public function printNameofLove(){
    $this->girl=CleanChar($this->girl);
    echo 'Your Love is : '.$this->girl;
}

}