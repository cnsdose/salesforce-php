<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 2019-02-06
 * Time: 14:53
 */
return [
    'authentication_url' => 'https://login.salesforce.com/services/oauth2/token',
    'api_version' => 'v44.0',

    'username' => null,
    'password' => null,
    'security_token' => null,
    'client_id' => null,
    'client_secret' => null,

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
