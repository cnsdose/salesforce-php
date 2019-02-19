<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ModeratedEntityField
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $entityName
 * @property string|null $fieldName
 * @property string|null $keywordList
 */
class ModeratedEntityField
{
    public static $classMap = [
    ];

    public function setEntityName(string $entityName)
    {
        $this->entityName = $entityName;
    }

    public function setFieldName(string $fieldName)
    {
        $this->fieldName = $fieldName;
    }

    public function setKeywordList(string $keywordList)
    {
        $this->keywordList = $keywordList;
    }
}
