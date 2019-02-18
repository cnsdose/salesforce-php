<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 2019-02-06
 * Time: 14:53
 */
return [
    'authentication_url' => 'https://login.salesforce.com/services/oauth2/token',
    'api_version' => 'v45.0',

    'auth_flow' => 'jwt',                                        // jwt or username_password

    'username' => env('SALESFORCE_USERNAME'),
    'password' => env('SALESFORCE_PASSWORD'),
    'security_token' => env('SALESFORCE_SECURITY_TOKEN'),
    'client_id' => env('SALESFORCE_CLIENT_ID'),
    'client_secret' => env('SALESFORCE_CLIENT_SECRET'),

    'public_key' => env('SALESFORCE_PUBLIC_KEY'),           // key file path or content directly, e.g. file_get_contents(path)
    'private_key' => env('SALESFORCE_PRIVATE_KEY'),

    'custom_fields' => [
        /*
         * Example: Adding 3 custom fields, with conversion rules where applicable, to object Custom
        \CNSDose\Salesforce\Models\Sales\Custom::class => [
            'Float__c' => 'number:16,2',
            'Time__c' => 'time',
            'SystemModstamp' => null,
        ],
        */
    ],
];
