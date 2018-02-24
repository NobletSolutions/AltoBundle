<?php

namespace NS\AltoBundle\Soap\Types;

class Transferors
{
    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Transferor = null;

    /**
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $Transferor
     */
    public function __construct($Transferor)
    {
        $this->Transferor = $Transferor;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getTransferor()
    {
        return $this->Transferor;
    }
}

