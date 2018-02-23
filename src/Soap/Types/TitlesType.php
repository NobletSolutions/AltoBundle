<?php

namespace NS\AltoBundle\Soap\Types;

class TitlesType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\Title
     */
    private $Title = null;

    /**
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\Title $Title
     */
    public function __construct($Title)
    {
        $this->Title = $Title;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\Title
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\Title $Title
     * @return TitlesType
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }


}

