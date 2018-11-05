<?php
namespace Greeflas\Serializer;
abstract class AbstractSerializer implements SerializerInterface
{
    abstract protected function encode(array $data): string ;
    public function serialize(Serializable $object): string
    {
        $data = $object->serialize();
        return $this->encode($data);
    }
}