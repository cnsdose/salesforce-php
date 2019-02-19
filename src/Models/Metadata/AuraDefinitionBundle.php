<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AuraDefinitionBundle
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $SVGContent
 * @property float|null $apiVersion
 * @property string|null $controllerContent
 * @property string|null $description
 * @property string|null $designContent
 * @property string|null $documentationContent
 * @property string|null $helperContent
 * @property string|null $markup
 * @property string|null $modelContent
 * @property PackageVersion[]|null $packageVersions
 * @property string|null $rendererContent
 * @property string|null $styleContent
 * @property string|null $testsuiteContent
 * @property string|null $type
 */
class AuraDefinitionBundle extends Metadata
{
    public static $classMap = [
        'packageVersions' => [
            'multiple' => true,
            'type' => PackageVersion::class,
        ],
    ];

    public function setSVGContent(string $SVGContent)
    {
        $this->SVGContent = $SVGContent;
    }

    public function setApiVersion(float $apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    public function setControllerContent(string $controllerContent)
    {
        $this->controllerContent = $controllerContent;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDesignContent(string $designContent)
    {
        $this->designContent = $designContent;
    }

    public function setDocumentationContent(string $documentationContent)
    {
        $this->documentationContent = $documentationContent;
    }

    public function setHelperContent(string $helperContent)
    {
        $this->helperContent = $helperContent;
    }

    public function setMarkup(string $markup)
    {
        $this->markup = $markup;
    }

    public function setModelContent(string $modelContent)
    {
        $this->modelContent = $modelContent;
    }

    public function setPackageVersions(array $packageVersions)
    {
        $this->packageVersions = $packageVersions;
    }

    public function setRendererContent(string $rendererContent)
    {
        $this->rendererContent = $rendererContent;
    }

    public function setStyleContent(string $styleContent)
    {
        $this->styleContent = $styleContent;
    }

    public function setTestsuiteContent(string $testsuiteContent)
    {
        $this->testsuiteContent = $testsuiteContent;
    }

    public function setType(AuraBundleType $type)
    {
        $this->type = $type->getValue();
    }
}
