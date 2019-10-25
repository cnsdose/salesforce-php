<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CommandAction
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $actionType
 * @property string|null $description
 * @property CommandActionIntent[]|null $intents
 * @property string|null $label
 * @property CommandActionParam[]|null $parameters
 * @property CommandActionResponse[]|null $responseTemplates
 * @property string|null $target
 */
class CommandAction extends Metadata
{
    public static $classMap = [
        'intents' => [
            'multiple' => true,
            'type' => CommandActionIntent::class,
        ],
        'parameters' => [
            'multiple' => true,
            'type' => CommandActionParam::class,
        ],
        'responseTemplates' => [
            'multiple' => true,
            'type' => CommandActionResponse::class,
        ],
    ];

    public function setActionType(string $actionType)
    {
        $this->actionType = $actionType;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setIntents(array $intents)
    {
        $this->intents = $intents;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setParameters(array $parameters)
    {
        $this->parameters = $parameters;
    }

    public function setResponseTemplates(array $responseTemplates)
    {
        $this->responseTemplates = $responseTemplates;
    }

    public function setTarget(string $target)
    {
        $this->target = $target;
    }
}
