<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 10:33 AM
 */

namespace NS\AltoBundle\Command;

use NS\AltoBundle\Soap\Types\Data\eForm\Discharge;
use NS\AltoBundle\Soap\Types\InstrumentsType;
use NS\AltoBundle\Soap\Types\Requests\DischargeRequest;
use NS\AltoBundle\Soap\Types\SubmitRequest;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestDischargeFormCommand extends BaseFormCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        parent::configure();

        $this->setName('alto:create:discharge');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $form = new Discharge($input->getArgument('file-no'), new InstrumentsType(['832175201']));

        $request = DischargeRequest::createForm($form);
        $requestStr = $this->serializeRequest($request);

        if ($input->getOption('debug')) {
            $output->writeln($requestStr);
        }

        $submitRequest = new SubmitRequest($input->getArgument('username'), $input->getArgument('password'), $requestStr);
        $this->submitRequest($submitRequest, $output, $input->getOption('debug'));
    }
}
