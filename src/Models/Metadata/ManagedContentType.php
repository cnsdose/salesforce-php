<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ManagedContentType
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $developerName
 * @property ManagedContentNodeType[]|null $managedContentNodeTypes
 * @property string|null $masterLabel
 */
class ManagedContentType extends Metadata
{
    public static $classMap = [
        'managedContentNodeTypes' => [
            'multiple' => true,
            'type' => ManagedContentNodeType::class,
        ],
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setManagedContentNodeTypes(array $managedContentNodeTypes)
    {
        $this->managedContentNodeTypes = $managedContentNodeTypes;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }
}
