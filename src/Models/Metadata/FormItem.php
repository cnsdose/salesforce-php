<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FormItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $emptySpace
 * @property string|null $expression
 * @property string|null $formLayoutableItem
 * @property string|null $helpText
 */
class FormItem
{
    public static $classMap = [
    ];

    public function setEmptySpace(bool $emptySpace)
    {
        $this->emptySpace = $emptySpace;
    }

    public function setExpression(string $expression)
    {
        $this->expression = $expression;
    }

    public function setFormLayoutableItem(string $formLayoutableItem)
    {
        $this->formLayoutableItem = $formLayoutableItem;
    }

    public function setHelpText(string $helpText)
    {
        $this->helpText = $helpText;
    }
}
