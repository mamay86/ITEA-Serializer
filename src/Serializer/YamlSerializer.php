<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 04.10.18
 * Time: 15:26
 */
namespace App\Serializer;
use App\Serializer\AbstractFormat;

use Symfony\Component\Yaml\Yaml;

class YamlSerializer extends AbstractFormat
{
    public function serialize($value)
    {
        return Yaml::dump((array)$value);
    }
}