<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PicklistValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $color
 * @property bool|null $default
 * @property string|null $description
 * @property bool|null $isActive
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
class PicklistValue extends Metadata
{
    public static $classMap = [
    ];

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function setDefault(bool $default)
    {
        $this->default = $default;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

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
