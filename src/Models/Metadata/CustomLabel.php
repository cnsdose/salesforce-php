<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomLabel
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $categories
 * @property string|null $language
 * @property bool|null $protected
 * @property string|null $shortDescription
 * @property string|null $value
 */
class CustomLabel extends Metadata
{
    public static $classMap = [
    ];

    public function setCategories(string $categories)
    {
        $this->categories = $categories;
    }

    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    public function setProtected(bool $protected)
    {
        $this->protected = $protected;
    }

    public function setShortDescription(string $shortDescription)
    {
        $this->shortDescription = $shortDescription;
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
