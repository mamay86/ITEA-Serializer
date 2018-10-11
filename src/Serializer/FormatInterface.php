<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 04.10.18
 * Time: 15:24
 */

namespace App\Serializer;

interface FormatInterface
{
    public function serialize($value);
}
