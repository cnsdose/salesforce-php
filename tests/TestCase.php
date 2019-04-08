<?php
/**
 * Created by PhpStorm.
 * User: frederick
 * Date: 7/6/18
 * Time: 2:02 PM
 */

namespace CNSDose\Salesforce\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected static $fileDescriptors = [];

    protected function getEnvironmentSetUp($app)
    {
        if (file_exists(__DIR__ . '/../.env')) {
            $dotenvVersion = array_values(array_filter(json_decode(file_get_contents(
                __DIR__ . '/../vendor/composer/installed.json'
            ), true), function ($package) {
                return $package['name'] === 'vlucas/phpdotenv';
            }))[0]['version_normalized'];
            if ((int)$dotenvVersion[0] >= 3) {
                \Dotenv\Dotenv::create(__DIR__ . '/..')->load();
            } else {
                (new \Dotenv\Dotenv(__DIR__ . '/..'))->load();
            }
        }

        $app['config']->set('salesforce', include __DIR__ . '/../config/salesforce.php');
    }

    protected function objectToArray($object)
    {
        return json_decode(json_encode($object), true);
    }

    protected function fdwrite(string $message, int $fd = 3)
    {
        fwrite($this->fdget($fd), $message);
        fflush($this->fdget($fd));
    }

    protected function fdget(int $fd = 3)
    {
        if (!isset(self::$fileDescriptors[$fd])) {
            self::$fileDescriptors[$fd] = fopen('php://fd/' . $fd, 'wb');
        }
        return self::$fileDescriptors[$fd];
    }
}
