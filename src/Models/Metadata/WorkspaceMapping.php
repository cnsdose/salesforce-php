<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WorkspaceMapping
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fieldName
 * @property string|null $tab
 */
class WorkspaceMapping
{
    public static $classMap = [
    ];

    public function setFieldName(string $fieldName)
    {
        $this->fieldName = $fieldName;
    }

    public function setTab(string $tab)
    {
        $this->tab = $tab;
    }
}
