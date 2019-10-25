<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PasswordPolicies
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $apiOnlyUserHomePageURL
 * @property string|null $complexity
 * @property bool|null $enableSetPasswordInApi
 * @property string|null $expiration
 * @property string|null $historyRestriction
 * @property string|null $lockoutInterval
 * @property string|null $maxLoginAttempts
 * @property string|null $minimumPasswordLength
 * @property bool|null $minimumPasswordLifetime
 * @property bool|null $obscureSecretAnswer
 * @property string|null $passwordAssistanceMessage
 * @property string|null $passwordAssistanceURL
 * @property string|null $questionRestriction
 */
class PasswordPolicies
{
    public static $classMap = [
    ];

    public function setApiOnlyUserHomePageURL(string $apiOnlyUserHomePageURL)
    {
        $this->apiOnlyUserHomePageURL = $apiOnlyUserHomePageURL;
    }

    public function setComplexity(Complexity $complexity)
    {
        $this->complexity = $complexity->getValue();
    }

    public function setEnableSetPasswordInApi(bool $enableSetPasswordInApi)
    {
        $this->enableSetPasswordInApi = $enableSetPasswordInApi;
    }

    public function setExpiration(Expiration $expiration)
    {
        $this->expiration = $expiration->getValue();
    }

    public function setHistoryRestriction(string $historyRestriction)
    {
        $this->historyRestriction = $historyRestriction;
    }

    public function setLockoutInterval(LockoutInterval $lockoutInterval)
    {
        $this->lockoutInterval = $lockoutInterval->getValue();
    }

    public function setMaxLoginAttempts(MaxLoginAttempts $maxLoginAttempts)
    {
        $this->maxLoginAttempts = $maxLoginAttempts->getValue();
    }

    public function setMinimumPasswordLength(string $minimumPasswordLength)
    {
        $this->minimumPasswordLength = $minimumPasswordLength;
    }

    public function setMinimumPasswordLifetime(bool $minimumPasswordLifetime)
    {
        $this->minimumPasswordLifetime = $minimumPasswordLifetime;
    }

    public function setObscureSecretAnswer(bool $obscureSecretAnswer)
    {
        $this->obscureSecretAnswer = $obscureSecretAnswer;
    }

    public function setPasswordAssistanceMessage(string $passwordAssistanceMessage)
    {
        $this->passwordAssistanceMessage = $passwordAssistanceMessage;
    }

    public function setPasswordAssistanceURL(string $passwordAssistanceURL)
    {
        $this->passwordAssistanceURL = $passwordAssistanceURL;
    }

    public function setQuestionRestriction(QuestionRestriction $questionRestriction)
    {
        $this->questionRestriction = $questionRestriction->getValue();
    }
}
