<?php

namespace CNSDose\Salesforce\Console;

use CNSDose\Salesforce\Support\Authentication;
use Illuminate\Console\Command;

class RetrieveAccessToken extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'salesforce:retrieve-access-token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retrieve a new access token';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'salesforce:retrieve-access-token';

    /**
     * Execute the console command.
     *
     * @return void
     * @throws CNSDose\Standards\Exceptions\StandardException
     */
    public function handle()
    {
        $this->line(Authentication::getAccessToken());
    }
}
