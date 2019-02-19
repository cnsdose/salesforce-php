<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FileUploadAndDownloadSecuritySettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FileTypeDispositionAssignmentBean[]|null $dispositions
 * @property bool|null $noHtmlUploadAsAttachment
 */
class FileUploadAndDownloadSecuritySettings extends Metadata
{
    public static $classMap = [
        'dispositions' => [
            'multiple' => true,
            'type' => FileTypeDispositionAssignmentBean::class,
        ],
    ];

    public function setDispositions(array $dispositions)
    {
        $this->dispositions = $dispositions;
    }

    public function setNoHtmlUploadAsAttachment(bool $noHtmlUploadAsAttachment)
    {
        $this->noHtmlUploadAsAttachment = $noHtmlUploadAsAttachment;
    }
}
