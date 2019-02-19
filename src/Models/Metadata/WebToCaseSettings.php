<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WebToCaseSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $caseOrigin
 * @property string|null $defaultResponseTemplate
 * @property bool|null $enableWebToCase
 */
class WebToCaseSettings
{
    public static $classMap = [
    ];

    public function setCaseOrigin(string $caseOrigin)
    {
        $this->caseOrigin = $caseOrigin;
    }

    public function setDefaultResponseTemplate(string $defaultResponseTemplate)
    {
        $this->defaultResponseTemplate = $defaultResponseTemplate;
    }

    public function setEnableWebToCase(bool $enableWebToCase)
    {
        $this->enableWebToCase = $enableWebToCase;
    }
}
