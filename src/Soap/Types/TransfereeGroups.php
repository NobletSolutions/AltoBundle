<?php

namespace NS\AltoBundle\Soap\Types;

class TransfereeGroups
{
    /** @var TransfereeGroup */
    private $TransfereeGroup;

    /**
     * Constructor
     *
     * @var TransfereeGroup $TransfereeGroup
     */
    public function __construct(TransfereeGroup $TransfereeGroup)
    {
        $this->TransfereeGroup = $TransfereeGroup;
    }

    public function getTransfereeGroup(): TransfereeGroup
    {
        return $this->TransfereeGroup;
    }
}

