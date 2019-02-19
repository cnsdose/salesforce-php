<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class IntegrationHubSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $canonicalName
 * @property string|null $canonicalNameBindingChar
 * @property string|null $description
 * @property bool|null $isEnabled
 * @property bool|null $isProtected
 * @property string|null $masterLabel
 * @property string|null $setupData
 * @property string|null $setupDefinition
 * @property string|null $setupNamespace
 * @property string|null $setupSimpleName
 * @property string|null $uUID
 * @property string|null $version
 * @property int|null $versionBuild
 * @property int|null $versionMajor
 * @property int|null $versionMinor
 * @property string|null $versionSetUuid
 */
class IntegrationHubSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setCanonicalName(string $canonicalName)
    {
        $this->canonicalName = $canonicalName;
    }

    public function setCanonicalNameBindingChar(string $canonicalNameBindingChar)
    {
        $this->canonicalNameBindingChar = $canonicalNameBindingChar;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setIsEnabled(bool $isEnabled)
    {
        $this->isEnabled = $isEnabled;
    }

    public function setIsProtected(bool $isProtected)
    {
        $this->isProtected = $isProtected;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setSetupData(string $setupData)
    {
        $this->setupData = $setupData;
    }

    public function setSetupDefinition(string $setupDefinition)
    {
        $this->setupDefinition = $setupDefinition;
    }

    public function setSetupNamespace(string $setupNamespace)
    {
        $this->setupNamespace = $setupNamespace;
    }

    public function setSetupSimpleName(string $setupSimpleName)
    {
        $this->setupSimpleName = $setupSimpleName;
    }

    public function setUUID(string $uUID)
    {
        $this->uUID = $uUID;
    }

    public function setVersion(string $version)
    {
        $this->version = $version;
    }

    public function setVersionBuild(int $versionBuild)
    {
        $this->versionBuild = $versionBuild;
    }

    public function setVersionMajor(int $versionMajor)
    {
        $this->versionMajor = $versionMajor;
    }

    public function setVersionMinor(int $versionMinor)
    {
        $this->versionMinor = $versionMinor;
    }

    public function setVersionSetUuid(string $versionSetUuid)
    {
        $this->versionSetUuid = $versionSetUuid;
    }
}
