<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConnectedAppOauthIdToken
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $idTokenAudience
 * @property bool|null $idTokenIncludeAttributes
 * @property bool|null $idTokenIncludeCustomPerms
 * @property bool|null $idTokenIncludeStandardClaims
 * @property int|null $idTokenValidity
 */
class ConnectedAppOauthIdToken
{
    public static $classMap = [
    ];

    public function setIdTokenAudience(string $idTokenAudience)
    {
        $this->idTokenAudience = $idTokenAudience;
    }

    public function setIdTokenIncludeAttributes(bool $idTokenIncludeAttributes)
    {
        $this->idTokenIncludeAttributes = $idTokenIncludeAttributes;
    }

    public function setIdTokenIncludeCustomPerms(bool $idTokenIncludeCustomPerms)
    {
        $this->idTokenIncludeCustomPerms = $idTokenIncludeCustomPerms;
    }

    public function setIdTokenIncludeStandardClaims(bool $idTokenIncludeStandardClaims)
    {
        $this->idTokenIncludeStandardClaims = $idTokenIncludeStandardClaims;
    }

    public function setIdTokenValidity(int $idTokenValidity)
    {
        $this->idTokenValidity = $idTokenValidity;
    }
}
