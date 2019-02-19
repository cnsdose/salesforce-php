<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MatchingRuleItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $blankValueBehavior
 * @property string|null $fieldName
 * @property string|null $matchingMethod
 */
class MatchingRuleItem
{
    public static $classMap = [
    ];

    public function setBlankValueBehavior(BlankValueBehavior $blankValueBehavior)
    {
        $this->blankValueBehavior = $blankValueBehavior->getValue();
    }

    public function setFieldName(string $fieldName)
    {
        $this->fieldName = $fieldName;
    }

    public function setMatchingMethod(MatchingMethod $matchingMethod)
    {
        $this->matchingMethod = $matchingMethod->getValue();
    }
}
