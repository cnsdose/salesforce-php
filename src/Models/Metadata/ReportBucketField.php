<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportBucketField
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $bucketType
 * @property string|null $developerName
 * @property string|null $masterLabel
 * @property string|null $nullTreatment
 * @property string|null $otherBucketLabel
 * @property string|null $sourceColumnName
 * @property bool|null $useOther
 * @property ReportBucketFieldValue[]|null $values
 */
class ReportBucketField
{
    public static $classMap = [
        'values' => [
            'multiple' => true,
            'type' => ReportBucketFieldValue::class,
        ],
    ];

    public function setBucketType(ReportBucketFieldType $bucketType)
    {
        $this->bucketType = $bucketType->getValue();
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setNullTreatment(ReportFormulaNullTreatment $nullTreatment)
    {
        $this->nullTreatment = $nullTreatment->getValue();
    }

    public function setOtherBucketLabel(string $otherBucketLabel)
    {
        $this->otherBucketLabel = $otherBucketLabel;
    }

    public function setSourceColumnName(string $sourceColumnName)
    {
        $this->sourceColumnName = $sourceColumnName;
    }

    public function setUseOther(bool $useOther)
    {
        $this->useOther = $useOther;
    }

    public function setValues(array $values)
    {
        $this->values = $values;
    }
}
