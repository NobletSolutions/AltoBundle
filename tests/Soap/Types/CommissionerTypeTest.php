<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 3:50 PM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\CommissionerType;
use PHPUnit\Framework\TestCase;

class CommissionerTypeTest extends TestCase
{
    public function testObject()
    {
        $commissioner = new CommissionerType('Nathanael','Noblet',new \DateTime('2018-02-22'),'Commissioner For Oaths','no idea');
        $this->assertEquals('<Commissioner><GivenName>Nathanael</GivenName><Surname>Noblet</Surname><ExpiryDate>2018-02-22</ExpiryDate><AuthorityDescription>Commissioner For Oaths</AuthorityDescription><AdditionalDescription>no idea</AdditionalDescription><OtherDescription></OtherDescription></Commissioner>',(string)$commissioner);
    }

    public function testOtherAuth()
    {
        $commissioner = new CommissionerType('Nathanael','Noblet',new \DateTime('2018-02-22'),'Other','no idea','Blah');
        $this->assertEquals('<Commissioner><GivenName>Nathanael</GivenName><Surname>Noblet</Surname><ExpiryDate>2018-02-22</ExpiryDate><AuthorityDescription>Other</AuthorityDescription><AdditionalDescription>no idea</AdditionalDescription><OtherDescription>Blah</OtherDescription></Commissioner>',(string)$commissioner);
    }
}
