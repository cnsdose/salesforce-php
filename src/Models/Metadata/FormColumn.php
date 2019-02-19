<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FormColumn
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FormItem[]|null $formItems
 */
class FormColumn
{
    public static $classMap = [
        'formItems' => [
            'multiple' => true,
            'type' => FormItem::class,
        ],
    ];

    public function setFormItems(array $formItems)
    {
        $this->formItems = $formItems;
    }
}
