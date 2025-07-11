<?php

namespace Bpnpdl\SmsFilament\Commands;

use Illuminate\Console\Command;

class SmsFilamentCommand extends Command
{
    public $signature = 'sms-filament';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
