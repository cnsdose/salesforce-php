<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CaseSubjectParticle
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $index
 * @property string|null $textField
 * @property string|null $type
 */
class CaseSubjectParticle extends Metadata
{
    public static $classMap = [
    ];

    public function setIndex(int $index)
    {
        $this->index = $index;
    }

    public function setTextField(string $textField)
    {
        $this->textField = $textField;
    }

    public function setType(CaseSubjectParticleType $type)
    {
        $this->type = $type->getValue();
    }
}
