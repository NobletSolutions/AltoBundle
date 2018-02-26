<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 5:56 PM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\EformHeaderType;
use PHPUnit\Framework\TestCase;

class EformHeaderTypeTest extends AbstractSoapTest
{
    public function testObjectToString()
    {
        $header = new EformHeaderType('Create','ASJT');
        $this->assertEquals('<Header_eForm><RequestType>Create</RequestType><DocumentType>ASJT</DocumentType></Header_eForm>',$this->serialize($header,'Header_eForm'));
    }
}
