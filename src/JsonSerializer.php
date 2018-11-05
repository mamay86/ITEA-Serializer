<?php
namespace Greeflas\Serializer;
class JsonSerializer extends AbstractSerializer
{
    protected function encode(array $data): string
    {
        $json = \json_encode($data);
        if (\json_last_error() === \JSON_ERROR_NONE) {
            return $json;
        }
        throw new \RuntimeException('Cannot convert data to JSON');
    }
}