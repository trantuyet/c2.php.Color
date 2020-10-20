<?php

include_once 'Colorable.php';
class Square implements colorable
{
    public function __construct()
    {
    }

    public function howToColor()
    {
        return "Color all four sides";
    }
}
