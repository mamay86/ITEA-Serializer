<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 04.10.18
 * Time: 15:26
 */

namespace App\Serializer;

use Symfony\Component\Yaml\Yaml;

class YamlSerializer extends AbstractFormat
{
    /**
     * YAML serialize
     *
     * @param $value
     * @return string
     */
    public function serialize($value) :string
    {
        return Yaml::dump((array)$value);
    }
}
