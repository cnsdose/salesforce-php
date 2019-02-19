<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class StrategyAction
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $action
 * @property StrategyActionArg[]|null $argument
 * @property string|null $description
 * @property string|null $label
 * @property string|null $name
 * @property string|null $type
 */
class StrategyAction
{
    public static $classMap = [
        'argument' => [
            'multiple' => true,
            'type' => StrategyActionArg::class,
        ],
    ];

    public function setAction(string $action)
    {
        $this->action = $action;
    }

    public function setArgument(array $argument)
    {
        $this->argument = $argument;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setType(InvocableActionType $type)
    {
        $this->type = $type->getValue();
    }
}
