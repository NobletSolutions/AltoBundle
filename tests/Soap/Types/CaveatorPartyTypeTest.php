<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 3:38 PM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\CaveatorPartyType;
use NS\AltoBundle\Soap\Types\LongAddressType;
use PHPUnit\Framework\TestCase;

class CaveatorPartyTypeTest extends AbstractSoapTest
{
    public function testIndividualObject()
    {
        $address = new LongAddressType(null, '155 Hidden Spring', null, 'Calgary', 'AB', 'Canada', 'T3A5J4');
        $caveator = CaveatorPartyType::createIndividual('Nathanael', 'Noblet', new \DateTime('2018-02-22'), $address);
        $this->assertEquals(
            sprintf('<Caveator><GivenName>Nathanael</GivenName><Surname>Noblet</Surname><ExecutionDate>2018-02-22</ExecutionDate>%s</Caveator>', $this->serialize($address,'Address')),
                $this->serialize($caveator,'Caveator'));
    }

    public function testCorporationObject()
    {
        $address = new LongAddressType(null, '155 Hidden Spring', null, 'Calgary', 'AB', 'Canada', 'T3A5J4');
        $caveator = CaveatorPartyType::createCorporation('Nathanael Inc.', new \DateTime('2018-02-22'), $address);
        $this->assertEquals(
            sprintf('<Caveator><ExecutionDate>2018-02-22</ExecutionDate>%s<CorporationName>Nathanael Inc.</CorporationName></Caveator>',$this->serialize($address,'Address')),
            $this->serialize($caveator,'Caveator'));
    }
}
