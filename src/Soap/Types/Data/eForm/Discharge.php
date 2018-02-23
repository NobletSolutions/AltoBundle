<?php

namespace NS\AltoBundle\Soap\Types\Data\eForm;

class Discharge
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
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $CustomerFileNumber
     * @var \NS\AltoBundle\Soap\Types\anyType $Instruments
     */
    public function __construct($CustomerFileNumber, $Instruments)
    {
        $this->CustomerFileNumber = $CustomerFileNumber;
        $this->Instruments = $Instruments;
    }

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

