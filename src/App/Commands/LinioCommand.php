<?php
namespace App\Commands;

use App\Util\ModValidator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class LinioCommand
 * @package App\Commands
 */
class LinioCommand extends Command {

    /**
     *
     */
    protected function configure()
    {
        $this->setName('Linio')
            ->setDescription('Linio Test Command');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $start = 1;
        $end = 100;

        for ($i = $start; $i <= $end; $i++) {
            $output->writeln(ModValidator::validate($i));
        }
    }

}