<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class KnowledgeLanguage
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property string|null $defaultAssignee
 * @property string|null $defaultAssigneeType
 * @property string|null $defaultReviewer
 * @property string|null $defaultReviewerType
 * @property string|null $name
 */
class KnowledgeLanguage
{
    public static $classMap = [
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setDefaultAssignee(string $defaultAssignee)
    {
        $this->defaultAssignee = $defaultAssignee;
    }

    public function setDefaultAssigneeType(KnowledgeLanguageLookupValueType $defaultAssigneeType)
    {
        $this->defaultAssigneeType = $defaultAssigneeType->getValue();
    }

    public function setDefaultReviewer(string $defaultReviewer)
    {
        $this->defaultReviewer = $defaultReviewer;
    }

    public function setDefaultReviewerType(KnowledgeLanguageLookupValueType $defaultReviewerType)
    {
        $this->defaultReviewerType = $defaultReviewerType->getValue();
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
