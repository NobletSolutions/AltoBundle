<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 2018-02-23
 * Time: 9:55 PM
 */

namespace NS\AltoBundle\Soap;

use NS\AltoBundle\Soap\Types\Requests\AbstractRequest;
use NS\AltoBundle\Soap\Types\Response\Response;
use NS\AltoBundle\Soap\Types\SubmitRequestResponse;
use Symfony\Component\Serializer\Serializer;

class RequestSerializer
{
    /** @var Serializer */
    private $serializer;

    /**
     * RequestSerializer constructor.
     * @param Serializer $serializer
     */
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    public function serialize(AbstractRequest $request): string
    {
        $str = $this->serializer->serialize($request, 'xml', ['xml_root_node_name' => 'Request', 'remove_empty_tags' => true, 'xml_format_output' => true]);
        return str_replace("<?xml version=\"1.0\"?>\n", '', $str);
    }

    public function deserialize(SubmitRequestResponse $requestResponse): Response
    {
        return $this->serializer->deserialize($requestResponse->getSubmitRequestResult(),Response::class,'xml');
    }
}
