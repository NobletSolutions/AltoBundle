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
     * @var $CustomerFileNumber
     */
    public function __construct(string $CustomerFileNumber)
    {
        $this->CustomerFileNumber = $CustomerFileNumber;
    }

    public function __toString()
    {
        $formatStr = '<Data_eForm_Universal><CustomerFileNumber>%s</CustomerFileNumber></Data_eForm_Universal>';
        return sprintf($formatStr, $this->CustomerFileNumber);
    }

    public function getCustomerFileNumber(): string
    {
        return $this->CustomerFileNumber;
    }
}

