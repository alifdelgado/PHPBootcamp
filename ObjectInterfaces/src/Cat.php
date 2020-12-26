<?php

class Cat extends PreyMethod implements Predator, Prey
{
    public function chase(Prey $prey)
    {
        var_dump('i am chasing a ' . get_class($prey));
    }

    public function kill(Prey $prey)
    {
        var_dump('i am killing a ' . get_class($prey));
    }
}
