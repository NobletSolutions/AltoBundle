<?php

namespace NS\AltoBundle\Soap\Types;

class TransfereeGroup
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $DefinedInterestText = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $TenancyType = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\Transferees
     */
    private $Transferees = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getDefinedInterestText()
    {
        return $this->DefinedInterestText;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getTenancyType()
    {
        return $this->TenancyType;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\Transferees
     */
    public function getTransferees()
    {
        return $this->Transferees;
    }


}

