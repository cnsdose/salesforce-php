<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class StrategyNodeInvocableAction
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $action
 * @property StrategyNodeInvocableActionArg[]|null $argument
 * @property bool|null $isGenerator
 * @property string|null $type
 */
class StrategyNodeInvocableAction extends StrategyNodeUnionBase
{
    public static $classMap = [
        'argument' => [
            'multiple' => true,
            'type' => StrategyNodeInvocableActionArg::class,
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

    public function setIsGenerator(bool $isGenerator)
    {
        $this->isGenerator = $isGenerator;
    }

    public function setType(InvocableActionType $type)
    {
        $this->type = $type->getValue();
    }
}
