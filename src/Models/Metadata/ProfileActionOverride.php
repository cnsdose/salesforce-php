<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfileActionOverride
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $actionName
 * @property string|null $content
 * @property string|null $formFactor
 * @property string|null $pageOrSobjectType
 * @property string|null $recordType
 * @property string|null $type
 */
class ProfileActionOverride
{
    public static $classMap = [
    ];

    public function setActionName(string $actionName)
    {
        $this->actionName = $actionName;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function setFormFactor(FormFactor $formFactor)
    {
        $this->formFactor = $formFactor->getValue();
    }

    public function setPageOrSobjectType(string $pageOrSobjectType)
    {
        $this->pageOrSobjectType = $pageOrSobjectType;
    }

    public function setRecordType(string $recordType)
    {
        $this->recordType = $recordType;
    }

    public function setType(ActionOverrideType $type)
    {
        $this->type = $type->getValue();
    }
}
