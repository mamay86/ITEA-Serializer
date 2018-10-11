<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 04.10.18
 * Time: 15:26
 */

namespace App\Serializer;

class JsonSerializer extends AbstractFormat
{
    public function serialize($value)
    {
        return \json_encode((array)$value);
    }
}
