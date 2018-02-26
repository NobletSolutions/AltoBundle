<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 3:17 PM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\ShortAddressType;
use PHPUnit\Framework\TestCase;

class ShortAddressTypeTest extends AbstractSoapTest
{
    public function testObjectToString()
    {
        $address = new ShortAddressType('Calgary','AB','Canada');
        $this->assertEquals('<Address><Municipality>Calgary</Municipality><ProvinceName>AB</ProvinceName><CountryName>Canada</CountryName></Address>',
            $this->serialize($address,'Address'));
    }
}
