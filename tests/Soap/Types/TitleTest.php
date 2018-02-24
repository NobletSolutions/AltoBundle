<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 4:06 PM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\Title;
use PHPUnit\Framework\TestCase;

class TitleTest extends TestCase
{
    public function testObjectToString()
    {
        $title = new Title('123155');
        $this->assertEquals('<Title><TitleNumber>123155</TitleNumber></Title>', (string)$title);
    }
}
