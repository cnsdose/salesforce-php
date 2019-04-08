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
function config(string $key, $default = null)
{
    $configs = [
        'salesforce' => include __DIR__ . '/../config/salesforce.php',
    ];
    return array_get($configs, $key, $default);
}
