<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveXmdFormattingProperty
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property WaveXmdFormattingBin[]|null $formattingBins
 * @property WaveXmdFormattingPredicate[]|null $formattingPredicates
 * @property string|null $property
 * @property string|null $referenceField
 * @property int|null $sortIndex
 * @property string|null $type
 */
class WaveXmdFormattingProperty
{
    public static $classMap = [
        'formattingBins' => [
            'multiple' => true,
            'type' => WaveXmdFormattingBin::class,
        ],
        'formattingPredicates' => [
            'multiple' => true,
            'type' => WaveXmdFormattingPredicate::class,
        ],
    ];

    public function setFormattingBins(array $formattingBins)
    {
        $this->formattingBins = $formattingBins;
    }

    public function setFormattingPredicates(array $formattingPredicates)
    {
        $this->formattingPredicates = $formattingPredicates;
    }

    public function setProperty(string $property)
    {
        $this->property = $property;
    }

    public function setReferenceField(string $referenceField)
    {
        $this->referenceField = $referenceField;
    }

    public function setSortIndex(int $sortIndex)
    {
        $this->sortIndex = $sortIndex;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }
}
