<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SurveySettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableSurvey
 * @property bool|null $enableSurveyOwnerCanManageResponse
 */
class SurveySettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableSurvey(bool $enableSurvey)
    {
        $this->enableSurvey = $enableSurvey;
    }

    public function setEnableSurveyOwnerCanManageResponse(bool $enableSurveyOwnerCanManageResponse)
    {
        $this->enableSurveyOwnerCanManageResponse = $enableSurveyOwnerCanManageResponse;
    }
}
