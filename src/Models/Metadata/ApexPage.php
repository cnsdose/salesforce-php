<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ApexPage
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property float|null $apiVersion
 * @property bool|null $availableInTouch
 * @property bool|null $confirmationTokenRequired
 * @property string|null $description
 * @property string|null $label
 * @property PackageVersion[]|null $packageVersions
 */
class ApexPage extends MetadataWithContent
{
    public static $classMap = [
        'packageVersions' => [
            'multiple' => true,
            'type' => PackageVersion::class,
        ],
    ];

    public function setApiVersion(float $apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    public function setAvailableInTouch(bool $availableInTouch)
    {
        $this->availableInTouch = $availableInTouch;
    }

    public function setConfirmationTokenRequired(bool $confirmationTokenRequired)
    {
        $this->confirmationTokenRequired = $confirmationTokenRequired;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setPackageVersions(array $packageVersions)
    {
        $this->packageVersions = $packageVersions;
    }
}
