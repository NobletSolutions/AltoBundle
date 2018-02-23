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
     * @param \NS\AltoBundle\Soap\Types\anyType $CustomerFileNumber
     * @return Data_eForm_Discharge
     */
    public function withCustomerFileNumber($CustomerFileNumber)
    {
        $new = clone $this;
        $new->CustomerFileNumber = $CustomerFileNumber;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getInstruments()
    {
        return $this->Instruments;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Instruments
     * @return Data_eForm_Discharge
     */
    public function withInstruments($Instruments)
    {
        $new = clone $this;
        $new->Instruments = $Instruments;

        return $new;
    }


}

