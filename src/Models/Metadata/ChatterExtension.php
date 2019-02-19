<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ChatterExtension
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $compositionComponent
 * @property string|null $description
 * @property string|null $extensionName
 * @property string|null $headerText
 * @property string|null $hoverText
 * @property string|null $icon
 * @property bool|null $isProtected
 * @property string|null $masterLabel
 * @property string|null $renderComponent
 * @property string|null $type
 */
class ChatterExtension extends Metadata
{
    public static $classMap = [
    ];

    public function setCompositionComponent(string $compositionComponent)
    {
        $this->compositionComponent = $compositionComponent;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setExtensionName(string $extensionName)
    {
        $this->extensionName = $extensionName;
    }

    public function setHeaderText(string $headerText)
    {
        $this->headerText = $headerText;
    }

    public function setHoverText(string $hoverText)
    {
        $this->hoverText = $hoverText;
    }

    public function setIcon(string $icon)
    {
        $this->icon = $icon;
    }

    public function setIsProtected(bool $isProtected)
    {
        $this->isProtected = $isProtected;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setRenderComponent(string $renderComponent)
    {
        $this->renderComponent = $renderComponent;
    }

    public function setType(ChatterExtensionType $type)
    {
        $this->type = $type->getValue();
    }
}
