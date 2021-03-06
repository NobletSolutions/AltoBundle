<?php

namespace NS\AltoBundle\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SubmitRequestResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $SubmitRequestResult = null;

    /**
     * Constructor
     *
     * @var string $SubmitRequestResult
     */
    public function __construct($SubmitRequestResult)
    {
        $this->SubmitRequestResult = $SubmitRequestResult;
    }

    /**
     * @return string
     */
    public function getSubmitRequestResult()
    {
        return $this->SubmitRequestResult;
    }
}

