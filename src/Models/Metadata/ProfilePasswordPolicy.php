<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfilePasswordPolicy
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $forgotPasswordRedirect
 * @property int|null $lockoutInterval
 * @property int|null $maxLoginAttempts
 * @property int|null $minimumPasswordLength
 * @property bool|null $minimumPasswordLifetime
 * @property bool|null $obscure
 * @property int|null $passwordComplexity
 * @property int|null $passwordExpiration
 * @property int|null $passwordHistory
 * @property int|null $passwordQuestion
 * @property string|null $profile
 */
class ProfilePasswordPolicy extends Metadata
{
    public static $classMap = [
    ];

    public function setForgotPasswordRedirect(bool $forgotPasswordRedirect)
    {
        $this->forgotPasswordRedirect = $forgotPasswordRedirect;
    }

    public function setLockoutInterval(int $lockoutInterval)
    {
        $this->lockoutInterval = $lockoutInterval;
    }

    public function setMaxLoginAttempts(int $maxLoginAttempts)
    {
        $this->maxLoginAttempts = $maxLoginAttempts;
    }

    public function setMinimumPasswordLength(int $minimumPasswordLength)
    {
        $this->minimumPasswordLength = $minimumPasswordLength;
    }

    public function setMinimumPasswordLifetime(bool $minimumPasswordLifetime)
    {
        $this->minimumPasswordLifetime = $minimumPasswordLifetime;
    }

    public function setObscure(bool $obscure)
    {
        $this->obscure = $obscure;
    }

    public function setPasswordComplexity(int $passwordComplexity)
    {
        $this->passwordComplexity = $passwordComplexity;
    }

    public function setPasswordExpiration(int $passwordExpiration)
    {
        $this->passwordExpiration = $passwordExpiration;
    }

    public function setPasswordHistory(int $passwordHistory)
    {
        $this->passwordHistory = $passwordHistory;
    }

    public function setPasswordQuestion(int $passwordQuestion)
    {
        $this->passwordQuestion = $passwordQuestion;
    }

    public function setProfile(string $profile)
    {
        $this->profile = $profile;
    }
}
