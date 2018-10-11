<?php

namespace App\Serializer;

abstract class AbstractFormat implements FormatInterface
{
    /**
     * Info by serializing
     *
     * @param $value
     */
    public function serialize($value)
    {
        echo \sprintf("[%s] serialized...\n", \spl_object_id($this));
    }
}
