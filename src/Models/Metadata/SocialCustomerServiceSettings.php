<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SocialCustomerServiceSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $caseSubjectOption
 */
class SocialCustomerServiceSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setCaseSubjectOption(CaseSubjectOption $caseSubjectOption)
    {
        $this->caseSubjectOption = $caseSubjectOption->getValue();
    }
}
