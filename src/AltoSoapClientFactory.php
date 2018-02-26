<?php

namespace NS\AltoBundle;

use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class AltoSoapClientFactory
{
    public static function factory(string $wsdl, array $options = [], array $ssl_context_options = []): AltoSoapClient
    {
        if (!empty($ssl_context_options)) {
            $options['stream_context'] = stream_context_create($ssl_context_options);
        }

        $clientFactory = new PhproClientFactory(AltoSoapClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, $options);
        $clientBuilder->withClassMaps(AltoClassmap::getCollection());

        return $clientBuilder->build();
    }
}

