<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LiveChatButtonDeployments
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $deployment
 */
class LiveChatButtonDeployments
{
    public static $classMap = [
    ];

    public function setDeployment(array $deployment)
    {
        $this->deployment = $deployment;
    }
}
