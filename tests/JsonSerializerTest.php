<?php
namespace Greeflas\Serializer\Tests;
use Greeflas\Serializer\JsonSerializer;
use Greeflas\Serializer\SerializerInterface;
use Greeflas\Serializer\Tests\Fixtures\Sample;
use PHPUnit\Framework\TestCase;
final class JsonSerializerTest extends TestCase
{
    /**
     * @var JsonSerializer
     */
    private $serializer;
    protected function setUp()
    {
        $this->serializer = new JsonSerializer();
    }
    public function testInstanceOfSerializerInterface()
    {
        self::assertInstanceOf(SerializerInterface::class, $this->serializer);
    }
    /**
     * @param Sample $object
     * @param string $expected
     *
     * @dataProvider serializeDataProvider
     */
    public function testSerialize(Sample $object, string $expected)
    {
        $actual = $this->serializer->serialize($object);
        self::assertEquals($actual, $expected);
    }
    public function serializeDataProvider(): iterable
    {
        yield [
            new Sample('First value', 'Second value'),
            '{"first":"First value","second":"Second value"}',
        ];
        yield [
            new Sample('First value', ['third' => 'Third value']),
            '{"first":"First value","second":{"third":"Third value"}}',
        ];
        yield [
            new Sample(["a" => ["b" => 1, "c" => 2]], ["d" => 3]),
            '{"first":{"a":{"b":1,"c":2}},"second":{"d":3}}',
        ];
    }
}