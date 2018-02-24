<?php

namespace NS\AltoBundle\Soap\Types;

class InstrumentsType
{
    /**
     * @var string
     */
    private $InstrumentNumber = null;

    /**
     * Constructor
     *
     * @param string $InstrumentNumber
     */
    public function __construct(string $InstrumentNumber)
    {
        $this->InstrumentNumber = $InstrumentNumber;
    }

    public function __toString()
    {
        return sprintf('<Instrument><InstrumentNumber>%s</InstrumentNumber></Instrument>',$this->InstrumentNumber);
    }

    public function getInstrumentNumber(): string
    {
        return $this->InstrumentNumber;
    }
}

