<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Bot
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property LocalMlDomain|null $botMlDomain
 * @property BotVersion[]|null $botVersions
 * @property ConversationContextVariable[]|null $contextVariables
 * @property string|null $description
 * @property string|null $label
 */
class Bot extends Metadata
{
    public static $classMap = [
        'botMlDomain' => [
            'multiple' => false,
            'type' => LocalMlDomain::class,
        ],
        'botVersions' => [
            'multiple' => true,
            'type' => BotVersion::class,
        ],
        'contextVariables' => [
            'multiple' => true,
            'type' => ConversationContextVariable::class,
        ],
    ];

    public function setBotMlDomain(LocalMlDomain $botMlDomain)
    {
        $this->botMlDomain = $botMlDomain;
    }

    public function setBotVersions(array $botVersions)
    {
        $this->botVersions = $botVersions;
    }

    public function setContextVariables(array $contextVariables)
    {
        $this->contextVariables = $contextVariables;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
