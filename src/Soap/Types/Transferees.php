<?php

namespace NS\AltoBundle\Soap\Types;

class Transferees
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Transferee = null;

    /**
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $Transferee
     */
    public function __construct($Transferee)
    {
        $this->Transferee = $Transferee;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getTransferee()
    {
        return $this->Transferee;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Transferee
     * @return Transferees
     */
    public function withTransferee($Transferee)
    {
        $new = clone $this;
        $new->Transferee = $Transferee;

        return $new;
    }


}

