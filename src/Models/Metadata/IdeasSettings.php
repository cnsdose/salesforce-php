<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class IdeasSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableChatterProfile
 * @property bool|null $enableHtmlIdea
 * @property bool|null $enableIdeaMultipleCategory
 * @property bool|null $enableIdeaThemes
 * @property bool|null $enableIdeas
 * @property bool|null $enableIdeasControllerExtensions
 * @property bool|null $enableIdeasReputation
 * @property float|null $halfLife
 * @property string|null $ideasProfilePage
 */
class IdeasSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableChatterProfile(bool $enableChatterProfile)
    {
        $this->enableChatterProfile = $enableChatterProfile;
    }

    public function setEnableHtmlIdea(bool $enableHtmlIdea)
    {
        $this->enableHtmlIdea = $enableHtmlIdea;
    }

    public function setEnableIdeaMultipleCategory(bool $enableIdeaMultipleCategory)
    {
        $this->enableIdeaMultipleCategory = $enableIdeaMultipleCategory;
    }

    public function setEnableIdeaThemes(bool $enableIdeaThemes)
    {
        $this->enableIdeaThemes = $enableIdeaThemes;
    }

    public function setEnableIdeas(bool $enableIdeas)
    {
        $this->enableIdeas = $enableIdeas;
    }

    public function setEnableIdeasControllerExtensions(bool $enableIdeasControllerExtensions)
    {
        $this->enableIdeasControllerExtensions = $enableIdeasControllerExtensions;
    }

    public function setEnableIdeasReputation(bool $enableIdeasReputation)
    {
        $this->enableIdeasReputation = $enableIdeasReputation;
    }

    public function setHalfLife(float $halfLife)
    {
        $this->halfLife = $halfLife;
    }

    public function setIdeasProfilePage(string $ideasProfilePage)
    {
        $this->ideasProfilePage = $ideasProfilePage;
    }
}
