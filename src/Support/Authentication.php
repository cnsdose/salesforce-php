<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 2:16 PM
 */

namespace CNSDose\Salesforce\Support;

use CNSDose\Standards\Exceptions\StandardException;
use Firebase\JWT\JWT;
use GuzzleHttp\Client as GuzzleClient;

class Authentication
{
    protected static $ACCESS_TOKEN;

    /**
     * @return string
     * @throws StandardException
     */
    public static function getAccessToken(): string
    {
        if (isset(self::$ACCESS_TOKEN)) {
            return self::$ACCESS_TOKEN;
        }

        $authFlow = config('salesforce.auth_flow');
        if ($authFlow === 'jwt') {
            $jwtHeaderBase64 = JWT::urlsafeB64Encode(json_encode(['alg' => 'RS256']));
            $jwtClaimBase64 = JWT::urlsafeB64Encode(json_encode([
                'iss' => config('salesforce.client_id'),
                'sub' => config('salesforce.username'),
                'aud' => 'https://login.salesforce.com',
                'exp' => (string)(time() + 5 * 60 - 10),
            ]));
            $privateKey = config('salesforce.private_key');
            if (file_exists($privateKey)) {
                $privateKey = file_get_contents($privateKey);
            }
            $signatureBase64 = JWT::urlsafeB64Encode(JWT::sign(sprintf('%s.%s', $jwtHeaderBase64, $jwtClaimBase64), $privateKey, 'RS256'));
            $assertion = sprintf('%s.%s.%s', $jwtHeaderBase64, $jwtClaimBase64, $signatureBase64);

            $guzzleClient = new GuzzleClient();
            $response = $guzzleClient->post(config('salesforce.authentication_url'), [
                'form_params' => [
                    'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
                    'assertion' => $assertion,
                ],
            ]);
            $body = json_decode($response->getBody(), true);
        } elseif ($authFlow === 'username_password') {
            $guzzleClient = new GuzzleClient();
            $response = $guzzleClient->post(config('salesforce.authentication_url'), [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => config('salesforce.client_id'),
                    'client_secret' => config('salesforce.client_secret'),
                    'username' => config('salesforce.username'),
                    'password' => sprintf('%s%s', config('salesforce.password'), config('salesforce.security_token')),
                ],
            ]);
            $body = json_decode($response->getBody(), true);
        } else {
            throw new StandardException(500, sprintf('Unknown authentication flow %s.', $authFlow));
        }

        self::$ACCESS_TOKEN = $body['access_token'];

        return self::$ACCESS_TOKEN;
    }

    /**
     * @return string
     * @throws StandardException
     */
    public static function getOrganisationId(): string
    {
        return substr(self::getAccessToken(), 0, strpos(self::getAccessToken(), '!'));
    }
}
