<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 2018-02-24
 * Time: 8:26 AM
 */

namespace NS\AltoBundle\Command;

use NS\AltoBundle\AltoSoapClient;
use NS\AltoBundle\AltoSoapClientFactory;
use NS\AltoBundle\Soap\RequestSerializer;
use NS\AltoBundle\Soap\Types\Requests\AbstractRequest;
use NS\AltoBundle\Soap\Types\Response\Response;
use NS\AltoBundle\Soap\Types\SubmitRequest;
use NS\AltoBundle\Soap\Types\SubmitRequestResponse;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

class BaseFormCommand extends Command
{
    protected function configure()
    {
        $this->setDefinition([
            new InputArgument('username', InputArgument::REQUIRED, 'Username'),
            new InputArgument('password', InputArgument::REQUIRED, 'Password'),
            new InputArgument('file-no', InputArgument::REQUIRED, 'File No'),
            new InputArgument('eForm-id', InputArgument::OPTIONAL, 'The eform identifier'),
            new InputOption('debug', 'd', InputOption::VALUE_OPTIONAL, 'Debug output?', false),
        ]);
    }

    /** @var AltoSoapClient */
    private $client;

    protected function getClient()
    {
        if (!$this->client) {
            $wsdlUrl = 'https://altowebservice.stg.alt.alberta.ca/altoexternalwebservice/altoexternalwebservice.svc?singleWsdl';

            $chainFile = realpath(__DIR__ . '/../Resources/config/chain.pem');
            $contextOptions = ['ssl' => ['verify_peer' => false]];
            if (is_file($chainFile)) {
                $contextOptions['ssl']['verify_peer'] = true;
                $contextOptions['ssl']['cafile'] = $chainFile;
            } else {
                $contextOptions['ssl']['allow_self_signed'] = true;
            }

            $soapOptions = [
                'trace' => true,
                'stream_context' => stream_context_create($contextOptions),
                'location' => "https://altowebservice.stg.alt.alberta.ca/altoexternalwebservice/altoexternalwebservice.svc",
                'cache_wsdl' => WSDL_CACHE_NONE,
            ];

            $this->client = AltoSoapClientFactory::factory($wsdlUrl, $soapOptions);
        }

        return $this->client;
    }

    public function submitRequest(SubmitRequest $request, OutputInterface $output, bool $debug = false)
    {
        $client = $this->getClient();
        try {
            $response = $this->deserializeResponse($client->submitRequest($request));
            if ($response->hasError()) {
                foreach ($response->getErrors() as $error) {
                    $output->writeln('<error>' . $error . '</error>');
                }

                return;
            }

            $output->writeln('EformId: ' . $response->getEFormIdentifier());

            if ($debug) {
                $output->writeln(print_r($client->debugLastSoapRequest()));
            }
        } catch (\Exception $exception) {
            $output->writeln("Exception: " . $exception->getMessage());

            if ($debug) {
                $output->writeln(print_r($client->debugLastSoapRequest()));
            }
        }
    }

    private $serializer;// = new Serializer([new PropertyNormalizer()], [new XmlEncoder()]);

    protected function serializeRequest(AbstractRequest $request)
    {
        if (!$this->serializer) {
            $this->serializer = new RequestSerializer(new Serializer([new PropertyNormalizer(), new DateTimeNormalizer('Y-m-d')], [new XmlEncoder()]));
        }

        return $this->serializer->serialize($request);

    }

    protected function deserializeResponse(SubmitRequestResponse $requestResponse): Response
    {
        if (!$this->serializer) {
            $this->serializer = new RequestSerializer(new Serializer([new PropertyNormalizer(), new DateTimeNormalizer('Y-m-d')], [new XmlEncoder()]));
        }

        return $this->serializer->deserialize($requestResponse);
    }
}
