<?php
namespace Greeflas\Serializer;
class Factory
{
    public function createJsonSerializer()
    {
        return new JsonSerializer();
    }
    public function createYamlSerializer()
    {
        return new YamlSerializer();
    }
    public function createXmlSerializer(?string $rootNodeName = null)
    {
        return new XmlSerializer($rootNodeName);
    }
}