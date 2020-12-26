<?php

class Lion extends PreyMethod implements Predator
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
