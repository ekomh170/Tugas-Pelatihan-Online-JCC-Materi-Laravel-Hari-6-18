<?php

require_once('animal.php');

class Frog extends Animal
{
    public function jump()
    {
        echo "Jump : Hop Hop <br><br>";
    }
}