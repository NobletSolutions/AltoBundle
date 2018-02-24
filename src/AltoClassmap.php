<?php

namespace NS\AltoBundle;

use NS\AltoBundle\Soap\Types as Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class AltoClassmap
{
    public static function getCollection() : ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('SubmitRequest', Type\SubmitRequest::class),
            new ClassMap('SubmitRequestResponse', Type\SubmitRequestResponse::class),
        ]);
    }
}
