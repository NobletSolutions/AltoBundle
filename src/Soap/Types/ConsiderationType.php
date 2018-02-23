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
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getConsiderationAmount()
    {
        return $this->ConsiderationAmount;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getConsiderationDescription()
    {
        return $this->ConsiderationDescription;
    }


}

