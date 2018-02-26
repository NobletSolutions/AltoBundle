<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 2018-02-25
 * Time: 10:16 AM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\AffidavitOfAttestation;
use NS\AltoBundle\Soap\Types\AffidavitType;
use NS\AltoBundle\Soap\Types\CommissionerType;
use NS\AltoBundle\Soap\Types\IndividualNameShortAddressType;
use NS\AltoBundle\Soap\Types\ShortAddressType;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

class AffidavitOfAttestationTest extends AbstractSoapTest
{
    public function testSerialization()
    {
        $attestation = new AffidavitOfAttestation(true,new ShortAddressType('Calgary','AB','Canada'),new IndividualNameShortAddressType('Gnat','Noblet','Calgary','AB','Canada'),new AffidavitType(new \DateTime('2018-02-28'),'Calgary','AB','Canada',false),new CommissionerType('Nathanael','Noblet',new \DateTime('2019-01-31'),'Other','Additional','Just felt like doing it'));
        $this->assertEquals('<AffidavitReValue><KnowsTransferor>true</KnowsTransferor><Execution><Municipality>Calgary</Municipality><ProvinceName>AB</ProvinceName><CountryName>Canada</CountryName></Execution><Witness><GivenName>Gnat</GivenName><Surname>Noblet</Surname><Municipality>Calgary</Municipality><ProvinceName>AB</ProvinceName><CountryName>Canada</CountryName></Witness><Affidavit><Sworn>false</Sworn><AffidavitDate>2018-02-28</AffidavitDate><Municipality>Calgary</Municipality><ProvinceName>AB</ProvinceName><CountryName>Canada</CountryName></Affidavit><Commissioner><GivenName>Nathanael</GivenName><Surname>Noblet</Surname><ExpiryDate>2019-01-31</ExpiryDate><AuthorityDescription>Other</AuthorityDescription><AdditionalDescription>Additional</AdditionalDescription><OtherDescription>Just felt like doing it</OtherDescription></Commissioner></AffidavitReValue>',$this->serialize($attestation,'AffidavitReValue'));
    }
}
