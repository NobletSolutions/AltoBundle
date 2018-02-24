<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 4:47 PM
 */

namespace NS\AltoBundle\Tests\Soap\Types;

use NS\AltoBundle\Soap\Types\AffidavitType;
use NS\AltoBundle\Soap\Types\CommissionerType;
use NS\AltoBundle\Soap\Types\CorporateSigningAffidavit;
use PHPUnit\Framework\TestCase;

class CorporateSigningAffidavitTest extends TestCase
{
    public function testObjectToString()
    {
        $commissioner = new CommissionerType('Nathanael','Noblet',new \DateTime('2018-02-22'),'Commissioner For Oaths','no idea');
        $affidavit = new AffidavitType(new \DateTime('2018-02-22'),'Calgary','AB','Canada',true);

        $signing = new CorporateSigningAffidavit($affidavit,$commissioner);
        $this->assertEquals(sprintf('<CorporateSigningAffidavit>%s%s</CorporateSigningAffidavit>',$affidavit,$commissioner),(string)$signing);
    }
}
