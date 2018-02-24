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

class EformHeaderTypeTest extends TestCase
{
    public function testObjectToString()
    {
        $header = new EformHeaderType('Create','ASJT');
        $this->assertEquals('<RequestType>Create</RequestType><DocumentType>ASJT</DocumentType><eFormIdentifier></eFormIdentifier>',(string)$header);
    }
}
