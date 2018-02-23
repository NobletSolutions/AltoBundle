<?php

namespace NS\AltoBundle\Soap\Types\Data\eForm;

class Universal
{
    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $CustomerFileNumber = null;

    /**
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $CustomerFileNumber
     */
    public function __construct($CustomerFileNumber)
    {
        $this->CustomerFileNumber = $CustomerFileNumber;
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
     * @return Universal
     */
    public function withCustomerFileNumber($CustomerFileNumber)
    {
        $new = clone $this;
        $new->CustomerFileNumber = $CustomerFileNumber;

        return $new;
    }
}

