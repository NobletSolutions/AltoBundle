<?php

namespace NS\AltoBundle\Soap\Types;

class Transferors
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Transferor = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getTransferor()
    {
        return $this->Transferor;
    }


}

