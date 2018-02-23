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
     * @param \NS\AltoBundle\Soap\Types\anyType $DefinedInterestText
     * @return TransfereeGroup
     */
    public function withDefinedInterestText($DefinedInterestText)
    {
        $new = clone $this;
        $new->DefinedInterestText = $DefinedInterestText;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getTenancyType()
    {
        return $this->TenancyType;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $TenancyType
     * @return TransfereeGroup
     */
    public function withTenancyType($TenancyType)
    {
        $new = clone $this;
        $new->TenancyType = $TenancyType;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\Transferees
     */
    public function getTransferees()
    {
        return $this->Transferees;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\Transferees $Transferees
     * @return TransfereeGroup
     */
    public function withTransferees($Transferees)
    {
        $new = clone $this;
        $new->Transferees = $Transferees;

        return $new;
    }


}

