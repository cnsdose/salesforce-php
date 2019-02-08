<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 2019-02-06
 * Time: 14:54
 */

namespace CNSDose\Salesforce\Providers;

use CNSDose\Salesforce\Console\GenerateModel;
use Illuminate\Support\ServiceProvider;

class SalesforceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '../../config/salesforce.php' => config_path('salesforce.php'),
        ]);
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateModel::class,
            ]);
        }
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '../../config/salesforce.php', 'salesforce');
    }
}
