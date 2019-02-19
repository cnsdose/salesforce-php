<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LeadConvertSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $allowOwnerChange
 * @property ObjectMapping[]|null $objectMapping
 * @property string|null $opportunityCreationOptions
 */
class LeadConvertSettings extends Metadata
{
    public static $classMap = [
        'objectMapping' => [
            'multiple' => true,
            'type' => ObjectMapping::class,
        ],
    ];

    public function setAllowOwnerChange(bool $allowOwnerChange)
    {
        $this->allowOwnerChange = $allowOwnerChange;
    }

    public function setObjectMapping(array $objectMapping)
    {
        $this->objectMapping = $objectMapping;
    }

    public function setOpportunityCreationOptions(VisibleOrRequired $opportunityCreationOptions)
    {
        $this->opportunityCreationOptions = $opportunityCreationOptions->getValue();
    }
}
