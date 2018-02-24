<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 10:33 AM
 */

namespace NS\AltoBundle\Command;

use NS\AltoBundle\AltoSoapClientFactory;
use NS\AltoBundle\Soap\Types\Data\eForm\Mortgage;
use NS\AltoBundle\Soap\Types\LongAddressType;
use NS\AltoBundle\Soap\Types\MortgageePartyGroupType;
use NS\AltoBundle\Soap\Types\MortgageePartyType;
use NS\AltoBundle\Soap\Types\Requests\MortgageRequest;
use NS\AltoBundle\Soap\Types\SubmitRequest;
use NS\AltoBundle\Soap\Types\Title;
use NS\AltoBundle\Soap\Types\TitlesType;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

class TestMortgageFormCommand extends BaseFormCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('alto:create:mortgage')
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
        $client = $this->getClient();

        $title = new TitlesType([new Title('131064981')]);
        $mortgagees = new MortgageePartyGroupType([MortgageePartyType::createCorporationMortgagee('corp',new LongAddressType('','123 Street',null,'Calgary','AB','Canada','T3A5J4'))]);
        $form = new Mortgage($input->getArgument('file-no'),$title,'75000.00','12345678', $mortgagees);

        $request = MortgageRequest::createForm($form);
        $requestStr = $this->serializeRequest($request);

        $output->writeln($requestStr);
        $submitRequest = new SubmitRequest($input->getArgument('username'),$input->getArgument('password'),$requestStr);
        try {
            $response = $client->submitRequest($submitRequest);
            $output->writeln(print_r($response,true));
            $output->writeln(print_r($client->debugLastSoapRequest()));
        } catch (\Exception $exception) {
            $output->writeln(print_r($client->debugLastSoapRequest()));
        }
    }
}
