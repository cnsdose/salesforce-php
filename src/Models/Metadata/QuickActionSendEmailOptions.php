<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class QuickActionSendEmailOptions
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $defaultEmailTemplateName
 * @property bool|null $ignoreDefaultEmailTemplateSubject
 */
class QuickActionSendEmailOptions
{
    public static $classMap = [
    ];

    public function setDefaultEmailTemplateName(string $defaultEmailTemplateName)
    {
        $this->defaultEmailTemplateName = $defaultEmailTemplateName;
    }

    public function setIgnoreDefaultEmailTemplateSubject(bool $ignoreDefaultEmailTemplateSubject)
    {
        $this->ignoreDefaultEmailTemplateSubject = $ignoreDefaultEmailTemplateSubject;
    }
}
