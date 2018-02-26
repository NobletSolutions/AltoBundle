<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 2018-02-26
 * Time: 10:42 AM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

abstract class AbstractSoapTest extends TestCase
{
    /** @var Serializer */
    protected $serializer;

    public function setUp()
    {
        $this->serializer = new Serializer([new PropertyNormalizer(),new DateTimeNormalizer('Y-m-d')],[new XmlEncoder()]);
        parent::setUp();
    }

    public function serialize($target, string $rootNode, bool $format = false)
    {
        return trim(str_replace("<?xml version=\"1.0\"?>\n",'',$this->serializer->serialize($target,'xml',['xml_root_node_name' => $rootNode, 'remove_empty_tags' => true, 'xml_format_output' => $format])));
    }
}
