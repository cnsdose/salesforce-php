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
            $dotenv = new \Dotenv\Dotenv(__DIR__ . '/..');
            $dotenv->load();
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
