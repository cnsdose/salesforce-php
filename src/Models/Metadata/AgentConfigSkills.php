<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AgentConfigSkills
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $skill
 */
class AgentConfigSkills
{
    public static $classMap = [
    ];

    public function setSkill(array $skill)
    {
        $this->skill = $skill;
    }
}
