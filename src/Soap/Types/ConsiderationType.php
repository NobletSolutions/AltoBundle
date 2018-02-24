<?php

namespace NS\AltoBundle\Soap\Types;

class ConsiderationType
{
    /** @var string */
    private $ConsiderationAmount;

    /** @var string */
    private $ConsiderationDescription;

    /**
     * Constructor
     *
     * @param string $ConsiderationAmount
     * @param string $ConsiderationDescription
     */
    public function __construct(string $ConsiderationAmount, string $ConsiderationDescription)
    {
        $this->ConsiderationAmount = $ConsiderationAmount;
        $this->ConsiderationDescription = $ConsiderationDescription;
    }

    public function getConsiderationAmount(): string
    {
        return $this->ConsiderationAmount;
    }

    public function getConsiderationDescription(): string
    {
        return $this->ConsiderationDescription;
    }
}

