<?php

namespace IvanoMatteo\LaravelIronSuite\Commands;

use Illuminate\Console\Command;

class LaravelIronSuiteCommand extends Command
{
    public $signature = 'laravel-ironsuite';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
