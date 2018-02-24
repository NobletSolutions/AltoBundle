<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 10:33 AM
 */

namespace NS\AltoBundle\Command;

use NS\AltoBundle\AltoSoapClientFactory;
use NS\AltoBundle\Soap\Types\AffidavitType;
use NS\AltoBundle\Soap\Types\AgentPartyType;
use NS\AltoBundle\Soap\Types\CaveatorPartyGroupType;
use NS\AltoBundle\Soap\Types\CaveatorPartyType;
use NS\AltoBundle\Soap\Types\CommissionerType;
use NS\AltoBundle\Soap\Types\Data\eForm\Caveat;
use NS\AltoBundle\Soap\Types\ECAVEAffidavitType;
use NS\AltoBundle\Soap\Types\LongAddressType;
use NS\AltoBundle\Soap\Types\Requests\CaveatRequest;
use NS\AltoBundle\Soap\Types\ShortAddressType;
use NS\AltoBundle\Soap\Types\SignatorType;
use NS\AltoBundle\Soap\Types\SubmitRequest;
use NS\AltoBundle\Soap\Types\Title;
use NS\AltoBundle\Soap\Types\TitlesType;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

class TestCaveatFormCommand extends BaseFormCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('alto:create:caveat')
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

        $jurat = new AffidavitType(new \DateTime('2018-02-22'), 'Calgary', 'AB', 'Canada', true);
        $commissioner = new CommissionerType('Nathanael', 'Noblet', new \DateTime('2019-10-31'), 'Commissioner For Oaths', 'Nothing');
        $detail = new SignatorType('Nathanael', 'Noblet', new ShortAddressType('Calgary', 'AB', 'Canada'));
        $affidavit = new ECAVEAffidavitType($jurat, $commissioner, $detail);
        $agent = AgentPartyType::createIndividual('Nathanael', 'Noblet',new \DateTime('2018-02-22'));
        $title = new Title('123456789');
        $caveat = CaveatorPartyType::createCorporation('Gnat Inc.', new \DateTime('2019-01-01'), new LongAddressType('', '123 Street', '', 'Calgary', 'AB', 'Canada', 'T3A5J4'));

        $form = new Caveat(
            $input->getArgument('file-no'),
            'I get every other siding',
            'I want to',
            new CaveatorPartyGroupType([$caveat]),
            $agent,
            $affidavit,
            new TitlesType([$title]));

        $request = CaveatRequest::createForm($form);

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
