<?php

namespace NS\AltoBundle\Soap\Types;

class Title
{
    /** @var string */
    private $TitleNumber = null;

    /**
     * Constructor
     *
     * @param string $TitleNumber
     */
    public function __construct(string $TitleNumber)
    {
        $this->TitleNumber = $TitleNumber;
    }

    public function __toString()
    {
        return "<Title><TitleNumber>{$this->TitleNumber}</TitleNumber></Title>";
    }

    public function getTitleNumber(): string
    {
        return $this->TitleNumber;
    }
}

