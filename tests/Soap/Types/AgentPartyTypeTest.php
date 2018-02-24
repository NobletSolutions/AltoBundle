<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 3:43 PM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\AgentPartyType;
use PHPUnit\Framework\TestCase;

class AgentPartyTypeTest extends TestCase
{
    public function testIndividual()
    {
        $agent = AgentPartyType::createIndividual('Nathanael','Noblet',new \DateTime('2018-02-22'));
        $this->assertEquals('<Agent><ExecutionDate>2018-02-22</ExecutionDate><GivenName>Nathanael</GivenName><Surname>Noblet</Surname></Agent>',(string)$agent);
    }

    public function testCorporation()
    {
        $agent = AgentPartyType::createCorporation('Nathanael Inc.',false,new \DateTime('2018-02-22'));
        $this->assertEquals('<Agent><ExecutionDate>2018-02-22</ExecutionDate><CorporationName>Nathanael Inc.</CorporationName><CorporateSeal>false</CorporateSeal></Agent>',(string)$agent);
    }
}
