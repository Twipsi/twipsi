<?php

namespace App\Console;

use Twipsi\Foundation\Console\CommandSchedule;
use Twipsi\Foundation\ComponentProviders\AppConsoleProvider;

final class ApplicationConsole extends AppConsoleProvider
{
    /**
     * List of commands to register.
     *
     * Note* All commands in the application
     * command folder will be laoded automatically
     *
     * @var array|string[]
     */
    protected array $commands = [
      // ExampleCommand => \Namespace\ExammpleCommand::class
    ];

    /**
     * Set the schedule for any commands.
     *
     * @param CommandSchedule $schedule
     * @return void
     */
    protected function schedule(CommandSchedule $schedule): void
    {
        // $schedule->command('example')->every(60); // minutes
    }
}
