<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Territory2RuleAssociation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $inherited
 * @property string|null $ruleName
 */
class Territory2RuleAssociation
{
    public static $classMap = [
    ];

    public function setInherited(bool $inherited)
    {
        $this->inherited = $inherited;
    }

    public function setRuleName(string $ruleName)
    {
        $this->ruleName = $ruleName;
    }
}
