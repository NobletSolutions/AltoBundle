<?php

namespace NS\AltoBundle\Soap\Types;

class TitlesType
{
    /** @var Title[] */
    private $Title = [];

    /**
     * Constructor
     *
     * @var Title[] $Title
     */
    public function __construct(array $Title)
    {
        $this->Title = $Title;
    }

    public function getTitle(): array
    {
        return $this->Title;
    }
}

