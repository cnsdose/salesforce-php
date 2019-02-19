<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class KeywordList
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property Keyword[]|null $keywords
 * @property string|null $masterLabel
 */
class KeywordList extends Metadata
{
    public static $classMap = [
        'keywords' => [
            'multiple' => true,
            'type' => Keyword::class,
        ],
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setKeywords(array $keywords)
    {
        $this->keywords = $keywords;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }
}
