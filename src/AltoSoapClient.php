<?php

namespace NS\AltoBundle;

use NS\AltoBundle\Soap\Types\SubmitRequest;
use NS\AltoBundle\Soap\Types\SubmitRequestResponse;
use Phpro\SoapClient\Client;
use Phpro\SoapClient\ClientInterface;

class AltoSoapClient extends Client implements ClientInterface
{
    public function submitRequest(SubmitRequest $request) : SubmitRequestResponse
    {
        return $this->call('SubmitRequest', $request);
    }
}

