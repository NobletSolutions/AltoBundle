<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 10:33 AM
 */

namespace NS\AltoBundle\Command;

use NS\AltoBundle\Soap\Types\Data\eForm\Mortgage;
use NS\AltoBundle\Soap\Types\LongAddressType;
use NS\AltoBundle\Soap\Types\MortgageePartyGroupType;
use NS\AltoBundle\Soap\Types\MortgageePartyType;
use NS\AltoBundle\Soap\Types\Requests\MortgageRequest;
use NS\AltoBundle\Soap\Types\SubmitRequest;
use NS\AltoBundle\Soap\Types\Title;
use NS\AltoBundle\Soap\Types\TitlesType;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestMortgageFormCommand extends BaseFormCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        parent::configure();

        $this->setName('alto:create:mortgage');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $title = new TitlesType([new Title('131064981')]);
        $mortgagees = new MortgageePartyGroupType([MortgageePartyType::createCorporationMortgagee('corp',new LongAddressType('','123 Street',null,'Calgary','AB','Canada','T3A5J4'))]);
        $form = new Mortgage($input->getArgument('file-no'),$title,'75000.00','12345678', $mortgagees);

        $request = MortgageRequest::createForm($form);
        $requestStr = $this->serializeRequest($request);

        if ($input->getOption('debug')) {
            $output->writeln($requestStr);
        }
        $submitRequest = new SubmitRequest($input->getArgument('username'),$input->getArgument('password'),$requestStr);
        $this->submitRequest($submitRequest,$output,$input->getOption('debug'));
    }
}
