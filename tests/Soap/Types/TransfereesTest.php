<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 2018-02-26
 * Time: 6:48 AM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\LongAddressType;
use NS\AltoBundle\Soap\Types\TransfereePartyType;
use NS\AltoBundle\Soap\Types\Transferees;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

class TransfereesTest extends AbstractSoapTest
{
    public function testSerialization()
    {
        $tran1 = TransfereePartyType::createIndividual('Gnat','Noblet',new \DateTime('2018-02-28'),true, new LongAddressType('','123 Some Street','','Calgary','AB','Canada','T3A 5J4'));
        $tran2 = TransfereePartyType::createCorporation('Gnat Inc.',new \DateTime('2018-02-28'),true, new LongAddressType('','123 Some Street','','Calgary','AB','Canada','T3A 5J4'));

        $object= new Transferees([$tran1,$tran2]);
        $this->assertEquals('<Transferees><Transferee><GivenName>Gnat</GivenName><Surname>Noblet</Surname><ExecutionDate>2018-02-28</ExecutionDate><IndivdualToSignAffidvitReValue>true</IndivdualToSignAffidvitReValue><Address><POBox></POBox><AddressLine1>123 Some Street</AddressLine1><AddressLine2></AddressLine2><Municipality>Calgary</Municipality><ProvinceName>AB</ProvinceName><CountryName>Canada</CountryName><PostalCode>T3A 5J4</PostalCode></Address></Transferee><Transferee><ExecutionDate>2018-02-28</ExecutionDate><IndivdualToSignAffidvitReValue>true</IndivdualToSignAffidvitReValue><Address><POBox></POBox><AddressLine1>123 Some Street</AddressLine1><AddressLine2></AddressLine2><Municipality>Calgary</Municipality><ProvinceName>AB</ProvinceName><CountryName>Canada</CountryName><PostalCode>T3A 5J4</PostalCode></Address><CorporationName>Gnat Inc.</CorporationName></Transferee></Transferees>',
            $this->serialize($object,'Transferees'));
    }
}
