<?php
namespace App;

use App\Commands\LinioCommand;

class Application extends \Symfony\Component\Console\Application
{

    public function __construct()
    {
        parent::__construct();
        $this->add(new LinioCommand());
    }

    public function init() {
        $this->run();
    }
}