<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 2:59 PM
 */

namespace NS\AltoBundle\Tests\Soap\Types\Data\eForm;

use NS\AltoBundle\Soap\Types\Data\eForm\Discharge;
use NS\AltoBundle\Soap\Types\InstrumentsType;
use PHPUnit\Framework\TestCase;

class DischargeTest extends TestCase
{
    public function testClassToString()
    {
        $discharge = new Discharge('FileNo',[new InstrumentsType('123456789'),new InstrumentsType('987654321')]);
        $this->assertEquals('<Data_eForm_Discharge><CustomerFileNumber>FileNo</CustomerFileNumber><Instruments><Instrument><InstrumentNumber>123456789</InstrumentNumber></Instrument><Instrument><InstrumentNumber>987654321</InstrumentNumber></Instrument></Instruments></Data_eForm_Discharge>',(string)$discharge);
    }
}
