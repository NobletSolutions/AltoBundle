<?php

namespace NS\AltoBundle\Soap\Types;

class InstrumentsType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $InstrumentNumber = null;

    /**
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $InstrumentNumber
     */
    public function __construct($InstrumentNumber)
    {
        $this->InstrumentNumber = $InstrumentNumber;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getInstrumentNumber()
    {
        return $this->InstrumentNumber;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $InstrumentNumber
     * @return InstrumentsType
     */
    public function withInstrumentNumber($InstrumentNumber)
    {
        $new = clone $this;
        $new->InstrumentNumber = $InstrumentNumber;

        return $new;
    }


}

