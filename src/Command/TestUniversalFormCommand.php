<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 10:33 AM
 */

namespace NS\AltoBundle\Command;

use NS\AltoBundle\AltoSoapClientFactory;
use NS\AltoBundle\Soap\Types\Data_eForm_Universal;
use NS\AltoBundle\Soap\Types\EformHeaderType;
use NS\AltoBundle\Soap\Types\Request;
use NS\AltoBundle\Soap\Types\SubmitRequest;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestUniversalFormCommand extends Command
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('alto:create:universal')
            ->setDefinition([
                new InputArgument('username',InputArgument::REQUIRED,'Username'),
                new InputArgument('password',InputArgument::REQUIRED,'Password'),
                new InputArgument('file-no',InputArgument::REQUIRED,'File No'),
                new InputArgument('eForm-id', InputArgument::OPTIONAL,'The eform identifier')
            ]);
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $wsdlUrl = 'https://altowebservice.stg.alt.alberta.ca/altoexternalwebservice/altoexternalwebservice.svc?singleWsdl';

        $context = stream_context_create([
            'ssl' => [
                // set some SSL/TLS specific options
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ],
        ]);

        $soapOptions = [
            'trace' => true,
            'stream_context' => $context,
            'location' => "https://altowebservice.stg.alt.alberta.ca/altoexternalwebservice/altoexternalwebservice.svc",
            'cache_wsdl' => WSDL_CACHE_NONE,
        ];
        $client = AltoSoapClientFactory::factory($wsdlUrl,$soapOptions);

        $universalForm = new Data_eForm_Universal();
        $universalForm = $universalForm->withCustomerFileNumber($input->getArgument('file-no'));
        $header = new EformHeaderType();
        $header = $header->withDocumentType('ASJT')->withRequestType('Create');
        if ($input->hasArgument('eForm-id')) {
            $header->withEFormIdentifier($input->getArgument('eForm-id'));
        }

        $request = new Request();
        $request = $request->withData_eForm_Universal($universalForm)->withHeader_eForm($header);
//
        $submitRequest = new SubmitRequest();
        $submitRequest = $submitRequest->withUsername($input->getArgument('username'))->withPassword($input->getArgument('password'))->withRequest($request);
        $response = $client->submitRequest($submitRequest);
        $output->writeln(print_r($response,true));
    }

}
