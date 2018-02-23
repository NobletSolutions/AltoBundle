<?php

namespace NS\AltoBundle;

use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class AltoSoapClientFactory
{
    public static function factory(string $wsdl, array $options = []) : AltoSoapClient
    {
        $clientFactory = new PhproClientFactory(AltoSoapClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, $options);
        $clientBuilder->withClassMaps(AltoClassmap::getCollection());

        return $clientBuilder->build();
    }
}

