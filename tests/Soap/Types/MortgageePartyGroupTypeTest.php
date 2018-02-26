<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 3:54 PM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\LongAddressType;
use NS\AltoBundle\Soap\Types\MortgageePartyGroupType;
use NS\AltoBundle\Soap\Types\MortgageePartyType;
use PHPUnit\Framework\TestCase;

class MortgageePartyGroupTypeTest extends AbstractSoapTest
{
    public function testObjectToString()
    {
        $personMortgagee = MortgageePartyType::createPersonMortgagee('Nathanael','Noblet', new LongAddressType(null,'155 Hidden Spring',null,'Calgary','AB','Canada','T3A5J4'));
        $corpMortgagee = MortgageePartyType::createCorporationMortgagee('Nathanael Inc', new LongAddressType(null,'155 Hidden Spring',null,'Calgary','AB','Canada','T3A5J4'));
        $mortgageGroup = new MortgageePartyGroupType([$personMortgagee,$corpMortgagee]);
        $personStr = '<GivenName>Nathanael</GivenName><Surname>Noblet</Surname><Address><AddressLine1>155 Hidden Spring</AddressLine1><Municipality>Calgary</Municipality><ProvinceName>AB</ProvinceName><CountryName>Canada</CountryName><PostalCode>T3A5J4</PostalCode></Address>';
        $corpStr = '<CorporationName>Nathanael Inc</CorporationName><Address><AddressLine1>155 Hidden Spring</AddressLine1><Municipality>Calgary</Municipality><ProvinceName>AB</ProvinceName><CountryName>Canada</CountryName><PostalCode>T3A5J4</PostalCode></Address>';
        $this->assertEquals("<Mortgagees><Mortgagee>$personStr</Mortgagee><Mortgagee>$corpStr</Mortgagee></Mortgagees>",
            $this->serialize($mortgageGroup,'Mortgagees'));
    }
}
