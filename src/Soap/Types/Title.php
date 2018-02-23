<?php

namespace NS\AltoBundle\Soap\Types;

class Title
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $TitleNumber = null;

    /**
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $TitleNumber
     */
    public function __construct($TitleNumber)
    {
        $this->TitleNumber = $TitleNumber;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getTitleNumber()
    {
        return $this->TitleNumber;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $TitleNumber
     * @return Title
     */
    public function withTitleNumber($TitleNumber)
    {
        $new = clone $this;
        $new->TitleNumber = $TitleNumber;

        return $new;
    }


}

