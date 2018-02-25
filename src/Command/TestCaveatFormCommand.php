<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 10:33 AM
 */

namespace NS\AltoBundle\Command;

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
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCaveatFormCommand extends BaseFormCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        parent::configure();

        $this->setName('alto:create:caveat');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $jurat = new AffidavitType(new \DateTime('2018-02-22'), 'Calgary', 'AB', 'Canada', true);
        $commissioner = new CommissionerType('Nathanael', 'Noblet', new \DateTime('2019-10-31'), 'Commissioner For Oaths', 'Nothing');
        $detail = new SignatorType('Nathanael', 'Noblet', new ShortAddressType('Calgary', 'AB', 'Canada'));
        $affidavit = new ECAVEAffidavitType($jurat, $commissioner, $detail);
        $agent = AgentPartyType::createIndividual('Nathanael', 'Noblet', new \DateTime('2018-02-22'));
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

        if ($input->getOption('debug')) {
            $output->writeln($requestStr);
        }

        $submitRequest = new SubmitRequest($input->getArgument('username'), $input->getArgument('password'), $requestStr);
        $this->submitRequest($submitRequest, $output, $input->getOption('debug'));
    }
}
