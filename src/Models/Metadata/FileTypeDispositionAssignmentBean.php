<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FileTypeDispositionAssignmentBean
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $behavior
 * @property string|null $fileType
 * @property bool|null $securityRiskFileType
 */
class FileTypeDispositionAssignmentBean
{
    public static $classMap = [
    ];

    public function setBehavior(FileDownloadBehavior $behavior)
    {
        $this->behavior = $behavior->getValue();
    }

    public function setFileType(FileType $fileType)
    {
        $this->fileType = $fileType->getValue();
    }

    public function setSecurityRiskFileType(bool $securityRiskFileType)
    {
        $this->securityRiskFileType = $securityRiskFileType;
    }
}
