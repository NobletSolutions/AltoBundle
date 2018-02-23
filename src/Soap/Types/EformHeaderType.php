<?php

namespace NS\AltoBundle\Soap\Types;

class EformHeaderType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $RequestType = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $DocumentType = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $eFormIdentifier = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getRequestType()
    {
        return $this->RequestType;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getEFormIdentifier()
    {
        return $this->eFormIdentifier;
    }


}

