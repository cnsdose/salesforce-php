<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PicklistValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $allowEmail
 * @property bool|null $closed
 * @property string[]|null $controllingFieldValues
 * @property bool|null $converted
 * @property bool|null $cssExposed
 * @property string|null $forecastCategory
 * @property bool|null $highPriority
 * @property int|null $probability
 * @property string|null $reverseRole
 * @property bool|null $reviewed
 * @property bool|null $won
 */
class PicklistValue extends GlobalPicklistValue
{
    public static $classMap = [
    ];

    public function setAllowEmail(bool $allowEmail)
    {
        $this->allowEmail = $allowEmail;
    }

    public function setClosed(bool $closed)
    {
        $this->closed = $closed;
    }

    public function setControllingFieldValues(array $controllingFieldValues)
    {
        $this->controllingFieldValues = $controllingFieldValues;
    }

    public function setConverted(bool $converted)
    {
        $this->converted = $converted;
    }

    public function setCssExposed(bool $cssExposed)
    {
        $this->cssExposed = $cssExposed;
    }

    public function setForecastCategory(ForecastCategories $forecastCategory)
    {
        $this->forecastCategory = $forecastCategory->getValue();
    }

    public function setHighPriority(bool $highPriority)
    {
        $this->highPriority = $highPriority;
    }

    public function setProbability(int $probability)
    {
        $this->probability = $probability;
    }

    public function setReverseRole(string $reverseRole)
    {
        $this->reverseRole = $reverseRole;
    }

    public function setReviewed(bool $reviewed)
    {
        $this->reviewed = $reviewed;
    }

    public function setWon(bool $won)
    {
        $this->won = $won;
    }
}
