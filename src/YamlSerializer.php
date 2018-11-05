<?php
namespace Greeflas\Serializer;
use Symfony\Component\Yaml\Yaml;
class YamlSerializer extends AbstractSerializer
{
    public function encode(array $data): string
    {
        return Yaml::dump($data);
    }
}