<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 04.10.18
 * Time: 15:34
 */

namespace App\Serializer;

class Serializer
{
    public $formats = [];

    /**
     * Getting all possible formats
     *
     * @param FormatInterface $format
     */
    public function addFormat(FormatInterface $format)
    {
        $this->formats[] = $format;
    }

    /**
     * Logic serializing by ClassName
     *
     * @param $value
     * @return string
     */
    public function serialize($value) :string
    {
        $className = get_class($value);
        foreach ($this->formats as $format) {
            $class = str_replace("App\Serializer\\", "", get_class($format));
            if ($class == $className::SERIALIZABLE_FORMAT."Serializer") {
                return $format->serialize($value);
            }
        }
    }
}
