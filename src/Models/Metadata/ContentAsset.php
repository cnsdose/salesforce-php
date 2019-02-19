<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ContentAsset
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $format
 * @property bool|null $isVisibleByExternalUsers
 * @property string|null $language
 * @property string|null $masterLabel
 * @property string|null $originNetwork
 * @property ContentAssetRelationships|null $relationships
 * @property ContentAssetVersions|null $versions
 */
class ContentAsset extends MetadataWithContent
{
    public static $classMap = [
        'relationships' => [
            'multiple' => false,
            'type' => ContentAssetRelationships::class,
        ],
        'versions' => [
            'multiple' => false,
            'type' => ContentAssetVersions::class,
        ],
    ];

    public function setFormat(ContentAssetFormat $format)
    {
        $this->format = $format->getValue();
    }

    public function setIsVisibleByExternalUsers(bool $isVisibleByExternalUsers)
    {
        $this->isVisibleByExternalUsers = $isVisibleByExternalUsers;
    }

    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setOriginNetwork(string $originNetwork)
    {
        $this->originNetwork = $originNetwork;
    }

    public function setRelationships(ContentAssetRelationships $relationships)
    {
        $this->relationships = $relationships;
    }

    public function setVersions(ContentAssetVersions $versions)
    {
        $this->versions = $versions;
    }
}
