<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 10:49 AM
 */

namespace NS\AltoBundle\Console;

use NS\AltoBundle\Command\TestCaveatFormCommand;
use NS\AltoBundle\Command\TestDischargeFormCommand;
use NS\AltoBundle\Command\TestMortgageFormCommand;
use NS\AltoBundle\Command\TestTransferOfLandFormCommand;
use NS\AltoBundle\Command\TestUniversalFormCommand;
use \Symfony\Component\Console\Application as SymfonyApplication;

class Application extends SymfonyApplication
{
    const APP_NAME = 'AltoClient';
    const APP_VERSION = '0.0.1';

    /**
     * Set up application:
     */
    public function __construct()
    {
        parent::__construct(self::APP_NAME, self::APP_VERSION);
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultCommands(): array
    {
        $commands = parent::getDefaultCommands();
        $commands[] = new TestUniversalFormCommand();
        $commands[] = new TestDischargeFormCommand();
        $commands[] = new TestMortgageFormCommand();
        $commands[] = new TestCaveatFormCommand();
        $commands[] = new TestTransferOfLandFormCommand();

        return $commands;
    }
}
