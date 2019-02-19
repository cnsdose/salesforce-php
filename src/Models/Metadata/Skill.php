<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Skill
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property SkillAssignments|null $assignments
 * @property string|null $description
 * @property string|null $label
 */
class Skill extends Metadata
{
    public static $classMap = [
        'assignments' => [
            'multiple' => false,
            'type' => SkillAssignments::class,
        ],
    ];

    public function setAssignments(SkillAssignments $assignments)
    {
        $this->assignments = $assignments;
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
