<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class UIObjectRelationFieldConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $displayLabel
 * @property string|null $queryText
 * @property int|null $rowOrder
 */
class UIObjectRelationFieldConfig
{
    public static $classMap = [
    ];

    public function setDisplayLabel(string $displayLabel)
    {
        $this->displayLabel = $displayLabel;
    }

    public function setQueryText(string $queryText)
    {
        $this->queryText = $queryText;
    }

    public function setRowOrder(int $rowOrder)
    {
        $this->rowOrder = $rowOrder;
    }
}
