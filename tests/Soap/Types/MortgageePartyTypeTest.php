<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 3:54 PM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\LongAddressType;
use NS\AltoBundle\Soap\Types\MortgageePartyType;
use PHPUnit\Framework\TestCase;

class MortgageePartyTypeTest extends AbstractSoapTest
{
    public function testPersonToString()
    {
        $mortgagee = MortgageePartyType::createPersonMortgagee('Nathanael','Noblet', new LongAddressType(null,'155 Hidden Spring',null,'Calgary','AB','Canada','T3A5J4'));
        $this->assertEquals('<Mortgagee><GivenName>Nathanael</GivenName><Surname>Noblet</Surname><Address><AddressLine1>155 Hidden Spring</AddressLine1><Municipality>Calgary</Municipality><ProvinceName>AB</ProvinceName><CountryName>Canada</CountryName><PostalCode>T3A5J4</PostalCode></Address></Mortgagee>',
            $this->serialize($mortgagee,'Mortgagee'));
    }

    public function testCorporationToString()
    {
        $mortgagee = MortgageePartyType::createCorporationMortgagee('Nathanael Inc', new LongAddressType(null,'155 Hidden Spring',null,'Calgary','AB','Canada','T3A5J4'));
        $this->assertEquals('<Mortgagee><CorporationName>Nathanael Inc</CorporationName><Address><AddressLine1>155 Hidden Spring</AddressLine1><Municipality>Calgary</Municipality><ProvinceName>AB</ProvinceName><CountryName>Canada</CountryName><PostalCode>T3A5J4</PostalCode></Address></Mortgagee>',
            $this->serialize($mortgagee,'Mortgagee'));
    }
}
