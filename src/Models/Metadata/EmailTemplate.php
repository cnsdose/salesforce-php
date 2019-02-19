<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmailTemplate
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property float|null $apiVersion
 * @property string[]|null $attachedDocuments
 * @property Attachment[]|null $attachments
 * @property bool|null $available
 * @property string|null $description
 * @property string|null $encodingKey
 * @property string|null $letterhead
 * @property string|null $name
 * @property PackageVersion[]|null $packageVersions
 * @property string|null $relatedEntityType
 * @property string|null $style
 * @property string|null $subject
 * @property string|null $textOnly
 * @property string|null $type
 * @property string|null $uiType
 */
class EmailTemplate extends MetadataWithContent
{
    public static $classMap = [
        'attachments' => [
            'multiple' => true,
            'type' => Attachment::class,
        ],
        'packageVersions' => [
            'multiple' => true,
            'type' => PackageVersion::class,
        ],
    ];

    public function setApiVersion(float $apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    public function setAttachedDocuments(array $attachedDocuments)
    {
        $this->attachedDocuments = $attachedDocuments;
    }

    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;
    }

    public function setAvailable(bool $available)
    {
        $this->available = $available;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEncodingKey(Encoding $encodingKey)
    {
        $this->encodingKey = $encodingKey->getValue();
    }

    public function setLetterhead(string $letterhead)
    {
        $this->letterhead = $letterhead;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setPackageVersions(array $packageVersions)
    {
        $this->packageVersions = $packageVersions;
    }

    public function setRelatedEntityType(string $relatedEntityType)
    {
        $this->relatedEntityType = $relatedEntityType;
    }

    public function setStyle(EmailTemplateStyle $style)
    {
        $this->style = $style->getValue();
    }

    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }

    public function setTextOnly(string $textOnly)
    {
        $this->textOnly = $textOnly;
    }

    public function setType(EmailTemplateType $type)
    {
        $this->type = $type->getValue();
    }

    public function setUiType(EmailTemplateUiType $uiType)
    {
        $this->uiType = $uiType->getValue();
    }
}
