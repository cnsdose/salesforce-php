<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowScreen
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $allowBack
 * @property bool|null $allowFinish
 * @property bool|null $allowPause
 * @property FlowConnector|null $connector
 * @property FlowScreenField[]|null $fields
 * @property string|null $helpText
 * @property string|null $pausedText
 * @property FlowScreenRule[]|null $rules
 * @property bool|null $showFooter
 * @property bool|null $showHeader
 */
class FlowScreen extends FlowNode
{
    public static $classMap = [
        'connector' => [
            'multiple' => false,
            'type' => FlowConnector::class,
        ],
        'fields' => [
            'multiple' => true,
            'type' => FlowScreenField::class,
        ],
        'rules' => [
            'multiple' => true,
            'type' => FlowScreenRule::class,
        ],
    ];

    public function setAllowBack(bool $allowBack)
    {
        $this->allowBack = $allowBack;
    }

    public function setAllowFinish(bool $allowFinish)
    {
        $this->allowFinish = $allowFinish;
    }

    public function setAllowPause(bool $allowPause)
    {
        $this->allowPause = $allowPause;
    }

    public function setConnector(FlowConnector $connector)
    {
        $this->connector = $connector;
    }

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function setHelpText(string $helpText)
    {
        $this->helpText = $helpText;
    }

    public function setPausedText(string $pausedText)
    {
        $this->pausedText = $pausedText;
    }

    public function setRules(array $rules)
    {
        $this->rules = $rules;
    }

    public function setShowFooter(bool $showFooter)
    {
        $this->showFooter = $showFooter;
    }

    public function setShowHeader(bool $showHeader)
    {
        $this->showHeader = $showHeader;
    }
}
