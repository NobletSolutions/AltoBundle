<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 3:13 PM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\LongAddressType;
use PHPUnit\Framework\TestCase;

class LongAddressTypeTest extends TestCase
{
    public function testObjectToString()
    {
        $address = new LongAddressType('', '123 Street', '', 'Calgary', 'AB', 'Canada', 'T3A5J4');
        $this->assertEquals('<Address><POBox></POBox><AddressLine1>123 Street</AddressLine1><AddressLine2></AddressLine2><Municipality>Calgary</Municipality><ProvinceName>AB</ProvinceName><CountryName>Canada</CountryName><PostalCode>T3A5J4</PostalCode></Address>', (string)$address);
    }
}
