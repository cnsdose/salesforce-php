<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 20/02/19
 * Time: 9:46 PM
 *
 * This file should be referenced at the beginning of all other examples
 */

require_once __DIR__ . '/../vendor/autoload.php';

if (file_exists(__DIR__ . '/../.env')) {
    $dotenv = \Dotenv\Dotenv::create(__DIR__ . '/..');
    $dotenv->load();
}
function config(string $key, $default = null)
{
    $configs = [
        'salesforce' => include __DIR__ . '/../config/salesforce.php',
    ];
    return array_get($configs, $key, $default);
}
