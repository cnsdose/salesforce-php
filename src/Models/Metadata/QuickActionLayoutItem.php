<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class QuickActionLayoutItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $emptySpace
 * @property string|null $field
 * @property string|null $uiBehavior
 */
class QuickActionLayoutItem
{
    public static $classMap = [
    ];

    public function setEmptySpace(bool $emptySpace)
    {
        $this->emptySpace = $emptySpace;
    }

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setUiBehavior(UiBehavior $uiBehavior)
    {
        $this->uiBehavior = $uiBehavior->getValue();
    }
}
