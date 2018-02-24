<?php

namespace NS\AltoBundle\Soap\Types;

class InstrumentsType
{
    /** @var array */
    private $InstrumentNumber = [];

    /**
     * Constructor
     *
     * @param array $InstrumentNumber
     */
    public function __construct(array $InstrumentNumber)
    {
        $this->InstrumentNumber = $InstrumentNumber;
    }

    public function __toString()
    {
        return sprintf('<InstrumentNumber>%s</InstrumentNumber>',implode('</InstrumentNumber><InstrumentNumber>',$this->InstrumentNumber));
    }

    public function getInstrumentNumber(): array
    {
        return $this->InstrumentNumber;
    }
}

