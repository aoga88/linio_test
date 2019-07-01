<?php
namespace App\Test\Commands;

use App\Commands\LinioCommand;
use App\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Component\Console\Tests\Command\CommandTest;

class LinioCommandTest extends KernelTestCase {

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $application = new Application();
        $this->command = $application->find('linio');

    }

    public function testMod3() {
        $commandTester = new CommandTester($this->command);
        $commandTester->execute([
            'command' => 'linio'
        ]);
        $output = $commandTester->getDisplay();
        $this->assertStringContainsString('Linio', $output);
    }

    public function testMod5() {
        $commandTester = new CommandTester($this->command);
        $commandTester->execute([
            'command' => 'linio'
        ]);
        $output = $commandTester->getDisplay();
        $this->assertStringContainsString('IT', $output);
    }

    public function testMod15() {
        $commandTester = new CommandTester($this->command);
        $commandTester->execute([
            'command' => 'linio'
        ]);
        $output = $commandTester->getDisplay();
        $this->assertStringContainsString('Linianos', $output);
    }

    public function testHas100Numbers() {
        $commandTester = new CommandTester($this->command);
        $commandTester->execute([
            'command' => 'linio'
        ]);
        $output = $commandTester->getDisplay();
        $this->assertTrue(count(explode("\n", $output)) == 101);
    }

    private $command;

}