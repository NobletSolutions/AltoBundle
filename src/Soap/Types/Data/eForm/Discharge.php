<?php

namespace NS\AltoBundle\Soap\Types\Data\eForm;

use NS\AltoBundle\Soap\Types\InstrumentsType;

class Discharge
{
    /** @var string */
    private $CustomerFileNumber;

    /** @var InstrumentsType */
    private $Instruments;

    /**
     * Constructor
     *
     * @var string $CustomerFileNumber
     * @var InstrumentsType $Instruments
     */
    public function __construct(string $CustomerFileNumber, InstrumentsType $Instruments)
    {
        $this->CustomerFileNumber = $CustomerFileNumber;
        $this->Instruments = $Instruments;
    }

    public function __toString()
    {
        return sprintf('<Data_eForm_Discharge><CustomerFileNumber>%s</CustomerFileNumber><Instruments>%s</Instruments></Data_eForm_Discharge>',$this->CustomerFileNumber, $this->Instruments);
    }

    public function getCustomerFileNumber(): string
    {
        return $this->CustomerFileNumber;
    }

    public function getInstruments(): InstrumentsType
    {
        return $this->Instruments;
    }
}

