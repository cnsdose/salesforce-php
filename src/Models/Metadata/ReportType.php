<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportType
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $autogenerated
 * @property string|null $baseObject
 * @property string|null $category
 * @property bool|null $deployed
 * @property string|null $description
 * @property ObjectRelationship|null $join
 * @property string|null $label
 * @property ReportLayoutSection[]|null $sections
 */
class ReportType extends Metadata
{
    public static $classMap = [
        'join' => [
            'multiple' => false,
            'type' => ObjectRelationship::class,
        ],
        'sections' => [
            'multiple' => true,
            'type' => ReportLayoutSection::class,
        ],
    ];

    public function setAutogenerated(bool $autogenerated)
    {
        $this->autogenerated = $autogenerated;
    }

    public function setBaseObject(string $baseObject)
    {
        $this->baseObject = $baseObject;
    }

    public function setCategory(ReportTypeCategory $category)
    {
        $this->category = $category->getValue();
    }

    public function setDeployed(bool $deployed)
    {
        $this->deployed = $deployed;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setJoin(ObjectRelationship $join)
    {
        $this->join = $join;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setSections(array $sections)
    {
        $this->sections = $sections;
    }
}