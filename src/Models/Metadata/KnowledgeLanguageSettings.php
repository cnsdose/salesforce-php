<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class KnowledgeLanguageSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property KnowledgeLanguage[]|null $language
 */
class KnowledgeLanguageSettings
{
    public static $classMap = [
        'language' => [
            'multiple' => true,
            'type' => KnowledgeLanguage::class,
        ],
    ];

    public function setLanguage(array $language)
    {
        $this->language = $language;
    }
}
