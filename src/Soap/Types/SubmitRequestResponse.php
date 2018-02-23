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
     * @return string
     */
    public function getSubmitRequestResult()
    {
        return $this->SubmitRequestResult;
    }

    /**
     * @param string $SubmitRequestResult
     * @return SubmitRequestResponse
     */
    public function withSubmitRequestResult($SubmitRequestResult)
    {
        $new = clone $this;
        $new->SubmitRequestResult = $SubmitRequestResult;

        return $new;
    }


}

