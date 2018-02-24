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

class CaveatorPartyTypeTest extends TestCase
{
    public function testIndividualObject()
    {
        $address = new LongAddressType(null, '155 Hidden Spring', null, 'Calgary', 'AB', 'Canada', 'T3A5J4');
        $caveator = CaveatorPartyType::createIndividual('Nathanael', 'Noblet', new \DateTime('2018-02-22'), $address);
        $this->assertEquals(sprintf('<GivenName>Nathanael</GivenName><Surname>Noblet</Surname><ExecutionDate>2018-02-22</ExecutionDate>%s',(string)$address),(string)$caveator);
    }

    public function testCorporationObject()
    {
        $address = new LongAddressType(null, '155 Hidden Spring', null, 'Calgary', 'AB', 'Canada', 'T3A5J4');
        $caveator = CaveatorPartyType::createCorporation('Nathanael Inc.', new \DateTime('2018-02-22'), $address);
        $this->assertEquals(sprintf('<CorporationName>Nathanael Inc.</CorporationName><ExecutionDate>2018-02-22</ExecutionDate>%s',(string)$address),(string)$caveator);
    }
}
