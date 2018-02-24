<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 10:33 AM
 */

namespace NS\AltoBundle\Command;

use NS\AltoBundle\Soap\Types\Data\eForm\Universal;
use NS\AltoBundle\Soap\Types\Requests\UniversalRequest;
use NS\AltoBundle\Soap\Types\SubmitRequest;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

class TestUniversalFormCommand extends BaseFormCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('alto:create:universal')
            ->setDefinition([
                new InputArgument('username', InputArgument::REQUIRED, 'Username'),
                new InputArgument('password', InputArgument::REQUIRED, 'Password'),
                new InputArgument('file-no', InputArgument::REQUIRED, 'File No'),
                new InputArgument('eForm-id', InputArgument::OPTIONAL, 'The eform identifier')
            ]);
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $universalForm = new Universal($input->getArgument('file-no'));
        $request = UniversalRequest::createForm($universalForm,'ASJT');
        $requestStr = $this->serializeRequest($request);

        $output->writeln($requestStr);

        $submitRequest = new SubmitRequest($input->getArgument('username'),$input->getArgument('password'),$requestStr);
        $client = $this->getClient();

        try {
            $response = $client->submitRequest($submitRequest);
            $output->writeln(print_r($response,true));
            $output->writeln(print_r($client->debugLastSoapRequest()));
        } catch (\Exception $exception) {
            $output->writeln(print_r($client->debugLastSoapRequest()));
        }
    }
}
