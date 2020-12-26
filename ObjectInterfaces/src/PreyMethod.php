<?php

abstract class PreyMethod
{
    public function chaseBy(Predator $predator)
    {
        var_dump('please help i am being chased by a ' . get_class($predator));
    }

    public function killedBy(Predator $predator)
    {
        var_dump(get_class(new static) . ' has been killed by a ' . get_class($predator));
    }
}
