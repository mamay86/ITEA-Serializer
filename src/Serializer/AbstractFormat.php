<?php

namespace App\Serializer;

abstract class AbstractFormat implements FormatInterface
{
    public function serialize($value)
    {
        echo \sprintf("[%s] serialized...\n", \spl_object_id($this));
    }
}
