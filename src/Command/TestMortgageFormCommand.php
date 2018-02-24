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
use NS\AltoBundle\Soap\Types\Title;
use NS\AltoBundle\Soap\Types\TitlesType;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

class TestMortgageFormCommand extends Command
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
        $wsdlUrl = __DIR__ . '/../Resources/config/WSDL/alto-full.wsdl';
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
        $client = AltoSoapClientFactory::factory($wsdlUrl, $soapOptions);

        $title = new TitlesType([new Title('123456789'),new Title('987654321')]);
        //(string $CustomerFileNumber, TitlesType $Titles, string $PrincipalAmount, string $StandardMortgageNumber, MortgageePartyGroupType $Mortgagees)
        $mortgagees = new MortgageePartyGroupType([MortgageePartyType::createCorporationMortgagee('corp',new LongAddressType('','123 Street',null,'Calgary','AB','Canada','T3A5J4'))]);
        $form = new Mortgage($input->getArgument('file-no'),$title,'75000.00','12345678', $mortgagees);

//        $header = new EformHeaderType('Create', 'ASJT', $input->hasArgument('eForm-id') ? $input->getArgument('eForm-id') : null);

        $request = MortgageRequest::createForm($form);//new Request($header, null, null, null, null, $universalForm);
        $serializer = new Serializer([new PropertyNormalizer()], [new XmlEncoder()]);
        $str = $serializer->serialize($request, 'xml', ['xml_root_node_name' => 'Request', 'remove_empty_tags' => true]);
        $requestStr = str_replace("<?xml version=\"1.0\"?>\n", '', $str);

        $output->writeln($requestStr);
/*
        $submitRequest = new SubmitRequest($input->getArgument('username'),$input->getArgument('password'),$requestStr);
        try {
            $response = $client->submitRequest($submitRequest);
            $output->writeln(print_r($response,true));
            $output->writeln(print_r($client->debugLastSoapRequest()));
        } catch (\Exception $exception) {
            $output->writeln(print_r($client->debugLastSoapRequest()));
        }
*/
    }
}
