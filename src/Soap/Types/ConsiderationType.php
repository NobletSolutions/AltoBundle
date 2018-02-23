<?php

namespace NS\AltoBundle\Soap\Types;

class ConsiderationType
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
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $ConsiderationAmount
     * @var \NS\AltoBundle\Soap\Types\anyType $ConsiderationDescription
     */
    public function __construct($ConsiderationAmount, $ConsiderationDescription)
    {
        $this->ConsiderationAmount = $ConsiderationAmount;
        $this->ConsiderationDescription = $ConsiderationDescription;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getConsiderationAmount()
    {
        return $this->ConsiderationAmount;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $ConsiderationAmount
     * @return ConsiderationType
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
     * @return ConsiderationType
     */
    public function withConsiderationDescription($ConsiderationDescription)
    {
        $new = clone $this;
        $new->ConsiderationDescription = $ConsiderationDescription;

        return $new;
    }


}

