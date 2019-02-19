<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomFeedFilter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FeedFilterCriterion[]|null $criteria
 * @property string|null $description
 * @property bool|null $isProtected
 * @property string|null $label
 */
class CustomFeedFilter extends Metadata
{
    public static $classMap = [
        'criteria' => [
            'multiple' => true,
            'type' => FeedFilterCriterion::class,
        ],
    ];

    public function setCriteria(array $criteria)
    {
        $this->criteria = $criteria;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setIsProtected(bool $isProtected)
    {
        $this->isProtected = $isProtected;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
