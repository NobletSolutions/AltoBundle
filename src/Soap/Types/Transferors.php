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

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Transferor
     * @return Transferors
     */
    public function withTransferor($Transferor)
    {
        $new = clone $this;
        $new->Transferor = $Transferor;

        return $new;
    }


}

