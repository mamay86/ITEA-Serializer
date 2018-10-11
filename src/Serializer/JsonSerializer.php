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
    /**
     * JSON serialize
     *
     * @param $value
     * @return string
     */
    public function serialize($value) :string
    {
        return \json_encode((array)$value);
    }
}
