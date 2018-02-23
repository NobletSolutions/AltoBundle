<?php

namespace NS\AltoBundle\Soap\Types;

class Data_eForm_Discharge
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $CustomerFileNumber = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Instruments = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCustomerFileNumber()
    {
        return $this->CustomerFileNumber;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getInstruments()
    {
        return $this->Instruments;
    }


}

