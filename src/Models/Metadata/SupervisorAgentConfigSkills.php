<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SupervisorAgentConfigSkills
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $skill
 */
class SupervisorAgentConfigSkills
{
    public static $classMap = [
    ];

    public function setSkill(array $skill)
    {
        $this->skill = $skill;
    }
}
