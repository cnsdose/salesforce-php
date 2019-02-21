<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 21/02/19
 * Time: 4:33 PM
 */

namespace CNSDose\Salesforce\Tests;

use CNSDose\Salesforce\Exceptions\AuthorisationException;
use CNSDose\Salesforce\Models\Records\Contact;
use CNSDose\Salesforce\Support\Authentication;

class AuthenticationTest extends TestCase
{
    public function test_authentication_error()
    {
        $this->expectException(AuthorisationException::class);
        $reflection = new \ReflectionClass(Authentication::class);
        $property = $reflection->getProperty('ACCESS_TOKEN');
        $property->setAccessible(true);
        $property->setValue('wrong_token');
        Contact::build()
            ->limit(1)
            ->offset(1)
            ->query();
    }

    public function test_username_password_flow()
    {
        $reflection = new \ReflectionClass(Authentication::class);
        $property = $reflection->getProperty('ACCESS_TOKEN');
        $property->setAccessible(true);
        $property->setValue(null);
        config(['salesforce.auth_flow' => 'username_password']);
        $this->assertNotEmpty(Authentication::getAccessToken());
        $this->assertNotEmpty(Authentication::getOrganisationId());
        config(['salesforce.auth_flow' => 'jwt']);
    }
}
