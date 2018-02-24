<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 4:04 PM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\ShortAddressType;
use NS\AltoBundle\Soap\Types\SignatorType;
use PHPUnit\Framework\TestCase;

class SignatorTypeTest extends TestCase
{
    public function testObjectToString()
    {
        $address = new ShortAddressType('Calgary','AB','Canada');
        $detail = new SignatorType('Nathanael','Noblet', $address);
        $this->assertEquals(sprintf('<SigningDetail><ContactGivenName>Nathanael</ContactGivenName><ContactSurname>Noblet</ContactSurname>%s</SigningDetail>',$address),(string)$detail);
    }
}
