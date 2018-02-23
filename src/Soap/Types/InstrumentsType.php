<?php

namespace NS\AltoBundle\Soap\Types;

class InstrumentsType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $InstrumentNumber = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getInstrumentNumber()
    {
        return $this->InstrumentNumber;
    }


}

