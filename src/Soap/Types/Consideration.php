<?php

namespace NS\AltoBundle\Soap\Types;

class Consideration
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $ConsiderationAmount = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $ConsiderationDescription = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getConsiderationAmount()
    {
        return $this->ConsiderationAmount;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $ConsiderationAmount
     * @return Consideration
     */
    public function withConsiderationAmount($ConsiderationAmount)
    {
        $new = clone $this;
        $new->ConsiderationAmount = $ConsiderationAmount;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getConsiderationDescription()
    {
        return $this->ConsiderationDescription;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $ConsiderationDescription
     * @return Consideration
     */
    public function withConsiderationDescription($ConsiderationDescription)
    {
        $new = clone $this;
        $new->ConsiderationDescription = $ConsiderationDescription;

        return $new;
    }


}

