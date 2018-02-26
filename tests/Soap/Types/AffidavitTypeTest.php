<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 3:46 PM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\AffidavitType;
use PHPUnit\Framework\TestCase;

class AffidavitTypeTest extends AbstractSoapTest
{
    public function testObject()
    {
        $affidavit = new AffidavitType(new \DateTime('2018-02-22'),'Calgary','AB','Canada',true);
        $this->assertEquals('<Affidavit><Sworn>true</Sworn><AffidavitDate>2018-02-22</AffidavitDate><Municipality>Calgary</Municipality><ProvinceName>AB</ProvinceName><CountryName>Canada</CountryName></Affidavit>',
            $this->serialize($affidavit,'Affidavit'));
    }
}
