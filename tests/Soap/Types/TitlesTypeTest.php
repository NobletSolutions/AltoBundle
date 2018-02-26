<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 4:09 PM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\Title;
use NS\AltoBundle\Soap\Types\TitlesType;
use PHPUnit\Framework\TestCase;

class TitlesTypeTest extends AbstractSoapTest
{
    public function testObjectToString()
    {
        $titleOne = new Title('123456789');
        $titleTwo = new Title('987654321');
        $titlesType = new TitlesType([$titleOne,$titleTwo]);
        $this->assertEquals('<Titles><Title><TitleNumber>123456789</TitleNumber></Title><Title><TitleNumber>987654321</TitleNumber></Title></Titles>',
            $this->serialize($titlesType,'Titles'));
    }
}
