<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CampaignInfluenceModel
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $isActive
 * @property bool|null $isDefaultModel
 * @property bool|null $isModelLocked
 * @property string|null $modelDescription
 * @property string|null $name
 * @property string|null $recordPreference
 */
class CampaignInfluenceModel extends Metadata
{
    public static $classMap = [
    ];

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setIsDefaultModel(bool $isDefaultModel)
    {
        $this->isDefaultModel = $isDefaultModel;
    }

    public function setIsModelLocked(bool $isModelLocked)
    {
        $this->isModelLocked = $isModelLocked;
    }

    public function setModelDescription(string $modelDescription)
    {
        $this->modelDescription = $modelDescription;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setRecordPreference(string $recordPreference)
    {
        $this->recordPreference = $recordPreference;
    }
}
