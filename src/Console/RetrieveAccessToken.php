<?php

namespace CNSDose\Salesforce\Console;

use CNSDose\Salesforce\Models\BaseModel;
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
     */
    public function handle()
    {
        $this->line(BaseModel::getAccessToken());
    }
}
