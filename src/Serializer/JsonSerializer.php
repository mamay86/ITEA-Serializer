<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 04.10.18
 * Time: 15:26
 */

//namespace App\Serializer;
use App\Serializer\AbstractFormat;

class JsonSerializer extends AbstractFormat
{
    public function serialize($value)
    {
        return \serialize($value);
    }
}