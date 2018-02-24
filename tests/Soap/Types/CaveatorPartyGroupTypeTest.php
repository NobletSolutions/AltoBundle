<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 3:41 PM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\CaveatorPartyGroupType;
use NS\AltoBundle\Soap\Types\CaveatorPartyType;
use NS\AltoBundle\Soap\Types\LongAddressType;
use PHPUnit\Framework\TestCase;

class CaveatorPartyGroupTypeTest extends TestCase
{
    public function testObjectToString()
    {
        $address = new LongAddressType(null, '155 Hidden Spring', null, 'Calgary', 'AB', 'Canada', 'T3A5J4');
        $caveator = CaveatorPartyType::createIndividual('Nathanael', 'Noblet', new \DateTime('2018-02-22'), $address);
        $group = new CaveatorPartyGroupType([$caveator]);
        $this->assertEquals(sprintf('<Caveators><Caveator><GivenName>Nathanael</GivenName><Surname>Noblet</Surname><ExecutionDate>2018-02-22</ExecutionDate>%s</Caveator></Caveators>',(string)$address),(string)$group);
    }
}
