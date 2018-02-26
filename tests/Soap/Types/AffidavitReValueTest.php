<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 2018-02-25
 * Time: 10:10 AM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\AffidavitReValue;
use NS\AltoBundle\Soap\Types\AffidavitType;
use NS\AltoBundle\Soap\Types\CommissionerType;
use NS\AltoBundle\Soap\Types\ConsiderationType;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

class AffidavitReValueTest extends AbstractSoapTest
{
    public function testSerialization()
    {
        $affidavitReValue = new AffidavitReValue('Agent',new ConsiderationType('75000.00','nil'),new AffidavitType(new \DateTime('2018-02-28'),'Calgary','AB','Canada',true),new CommissionerType('Nathanael','Noblet',new \DateTime('2019-01-31'),'Other','Additional','Just felt like doing it'));

        $this->assertEquals('<AffidavitReValue><SigningIndividual>Agent</SigningIndividual><Consideration><ConsiderationAmount>75000.00</ConsiderationAmount><ConsiderationDescription>nil</ConsiderationDescription></Consideration><Affidavit><Sworn>true</Sworn><AffidavitDate>2018-02-28</AffidavitDate><Municipality>Calgary</Municipality><ProvinceName>AB</ProvinceName><CountryName>Canada</CountryName></Affidavit><Commissioner><GivenName>Nathanael</GivenName><Surname>Noblet</Surname><ExpiryDate>2019-01-31</ExpiryDate><AuthorityDescription>Other</AuthorityDescription><AdditionalDescription>Additional</AdditionalDescription><OtherDescription>Just felt like doing it</OtherDescription></Commissioner></AffidavitReValue>',
            $this->serialize($affidavitReValue,'AffidavitReValue'));
    }
}
