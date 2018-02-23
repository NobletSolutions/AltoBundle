<?php

namespace NS\AltoBundle\Soap\Types;

class Transferees
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Transferee = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getTransferee()
    {
        return $this->Transferee;
    }


}

