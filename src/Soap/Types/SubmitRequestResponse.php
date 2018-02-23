<?php

namespace NS\AltoBundle\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SubmitRequestResponse implements ResultInterface
{

    /**
     * @var string
     */
    private $SubmitRequestResult;

    /**
     * @return string
     */
    public function getSubmitRequestResult()
    {
        return $this->SubmitRequestResult;
    }


}

