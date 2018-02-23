<?php

namespace NS\AltoBundle\Soap\Types;

class TransfereeGroups
{

    /**
     * @var \NS\AltoBundle\Soap\Types\TransfereeGroup
     */
    private $TransfereeGroup = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\TransfereeGroup
     */
    public function getTransfereeGroup()
    {
        return $this->TransfereeGroup;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\TransfereeGroup $TransfereeGroup
     * @return TransfereeGroups
     */
    public function withTransfereeGroup($TransfereeGroup)
    {
        $new = clone $this;
        $new->TransfereeGroup = $TransfereeGroup;

        return $new;
    }


}

