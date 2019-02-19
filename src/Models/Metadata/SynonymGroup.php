<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SynonymGroup
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $languages
 * @property string[]|null $terms
 */
class SynonymGroup
{
    public static $classMap = [
    ];

    public function setLanguages(array $languages)
    {
        $this->languages = $languages;
    }

    public function setTerms(array $terms)
    {
        $this->terms = $terms;
    }
}
