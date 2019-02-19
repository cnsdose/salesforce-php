<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Certificate
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $caSigned
 * @property bool|null $encryptedWithPlatformEncryption
 * @property string|null $expirationDate
 * @property int|null $keySize
 * @property string|null $masterLabel
 * @property bool|null $privateKeyExportable
 */
class Certificate extends MetadataWithContent
{
    public static $classMap = [
    ];

    public function setCaSigned(bool $caSigned)
    {
        $this->caSigned = $caSigned;
    }

    public function setEncryptedWithPlatformEncryption(bool $encryptedWithPlatformEncryption)
    {
        $this->encryptedWithPlatformEncryption = $encryptedWithPlatformEncryption;
    }

    public function setExpirationDate(string $expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    public function setKeySize(int $keySize)
    {
        $this->keySize = $keySize;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setPrivateKeyExportable(bool $privateKeyExportable)
    {
        $this->privateKeyExportable = $privateKeyExportable;
    }
}
