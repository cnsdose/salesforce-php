<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ActionLinkTemplate
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $actionUrl
 * @property string|null $headers
 * @property bool|null $isConfirmationRequired
 * @property bool|null $isGroupDefault
 * @property string|null $label
 * @property string|null $labelKey
 * @property string|null $linkType
 * @property string|null $method
 * @property int|null $position
 * @property string|null $requestBody
 * @property string|null $userAlias
 * @property string|null $userVisibility
 */
class ActionLinkTemplate
{
    public static $classMap = [
    ];

    public function setActionUrl(string $actionUrl)
    {
        $this->actionUrl = $actionUrl;
    }

    public function setHeaders(string $headers)
    {
        $this->headers = $headers;
    }

    public function setIsConfirmationRequired(bool $isConfirmationRequired)
    {
        $this->isConfirmationRequired = $isConfirmationRequired;
    }

    public function setIsGroupDefault(bool $isGroupDefault)
    {
        $this->isGroupDefault = $isGroupDefault;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLabelKey(string $labelKey)
    {
        $this->labelKey = $labelKey;
    }

    public function setLinkType(ActionLinkType $linkType)
    {
        $this->linkType = $linkType->getValue();
    }

    public function setMethod(ActionLinkHttpMethod $method)
    {
        $this->method = $method->getValue();
    }

    public function setPosition(int $position)
    {
        $this->position = $position;
    }

    public function setRequestBody(string $requestBody)
    {
        $this->requestBody = $requestBody;
    }

    public function setUserAlias(string $userAlias)
    {
        $this->userAlias = $userAlias;
    }

    public function setUserVisibility(ActionLinkUserVisibility $userVisibility)
    {
        $this->userVisibility = $userVisibility->getValue();
    }
}
