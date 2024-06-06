<?php

namespace LivGhit\LaraBackdrop\Commands;

use Illuminate\Console\Command;

class LaraBackdropCommand extends Command
{
    public $signature = 'larabackdrop';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
