<?php

namespace NS\AltoBundle\Soap\Types;

class TitlesType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\Title
     */
    private $Title = null;

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

