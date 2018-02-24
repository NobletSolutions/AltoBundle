<?php

use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Assembler;

return Config::create()
    ->setWsdl(__DIR__.'/WSDL/alto-full.wsdl')
    ->setTypeDestination('src/Soap/Types')
    ->setTypeNamespace('NS\AltoBundle\Soap\Types')
    ->setClientNamespace('NS\AltoBundle')
    ->setClientDestination('src/')
    ->setClientName('AltoSoapClient')
    ->setClassMapDestination('src/')
    ->setClassMapName('AltoClassmap')
    ->setClassMapNamespace('NS\AltoBundle')
    ->addSoapOption('features', SOAP_SINGLE_ELEMENT_ARRAYS)
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
//    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler()))
    ->addRule(new Rules\AssembleRule(new Assembler\ConstructorAssembler()))
    ->addRule(new Rules\TypenameMatchesRule(
        new Rules\AssembleRule(new Assembler\RequestAssembler()),
        '/Request$/'
    ))
    ->addRule(new Rules\TypenameMatchesRule(
        new Rules\AssembleRule(new Assembler\ResultAssembler()),
        '/Response$/'
    ))
;
