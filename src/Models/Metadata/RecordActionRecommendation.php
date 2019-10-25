<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecordActionRecommendation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $defaultStrategy
 * @property bool|null $hasDescription
 * @property bool|null $hasImage
 * @property bool|null $hasRejectAction
 * @property bool|null $hasTitle
 * @property int|null $maxDisplayRecommendations
 */
class RecordActionRecommendation
{
    public static $classMap = [
    ];

    public function setDefaultStrategy(string $defaultStrategy)
    {
        $this->defaultStrategy = $defaultStrategy;
    }

    public function setHasDescription(bool $hasDescription)
    {
        $this->hasDescription = $hasDescription;
    }

    public function setHasImage(bool $hasImage)
    {
        $this->hasImage = $hasImage;
    }

    public function setHasRejectAction(bool $hasRejectAction)
    {
        $this->hasRejectAction = $hasRejectAction;
    }

    public function setHasTitle(bool $hasTitle)
    {
        $this->hasTitle = $hasTitle;
    }

    public function setMaxDisplayRecommendations(int $maxDisplayRecommendations)
    {
        $this->maxDisplayRecommendations = $maxDisplayRecommendations;
    }
}
