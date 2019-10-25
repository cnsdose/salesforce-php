<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CommandActionIntent
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $phrase
 * @property CommandActionResponse[]|null $responseTemplates
 */
class CommandActionIntent
{
    public static $classMap = [
        'responseTemplates' => [
            'multiple' => true,
            'type' => CommandActionResponse::class,
        ],
    ];

    public function setPhrase(string $phrase)
    {
        $this->phrase = $phrase;
    }

    public function setResponseTemplates(array $responseTemplates)
    {
        $this->responseTemplates = $responseTemplates;
    }
}
