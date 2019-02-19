<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveRecipe
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $dataflow
 * @property string|null $masterLabel
 * @property string|null $securityPredicate
 * @property string|null $targetDatasetAlias
 */
class WaveRecipe extends MetadataWithContent
{
    public static $classMap = [
    ];

    public function setDataflow(string $dataflow)
    {
        $this->dataflow = $dataflow;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setSecurityPredicate(string $securityPredicate)
    {
        $this->securityPredicate = $securityPredicate;
    }

    public function setTargetDatasetAlias(string $targetDatasetAlias)
    {
        $this->targetDatasetAlias = $targetDatasetAlias;
    }
}
