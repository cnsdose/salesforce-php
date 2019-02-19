<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConnectedAppSamlConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $acsUrl
 * @property string|null $certificate
 * @property string|null $encryptionCertificate
 * @property string|null $encryptionType
 * @property string|null $entityUrl
 * @property string|null $issuer
 * @property string|null $samlIdpSLOBindingEnum
 * @property string|null $samlNameIdFormat
 * @property string|null $samlSloUrl
 * @property string|null $samlSubjectCustomAttr
 * @property string|null $samlSubjectType
 */
class ConnectedAppSamlConfig
{
    public static $classMap = [
    ];

    public function setAcsUrl(string $acsUrl)
    {
        $this->acsUrl = $acsUrl;
    }

    public function setCertificate(string $certificate)
    {
        $this->certificate = $certificate;
    }

    public function setEncryptionCertificate(string $encryptionCertificate)
    {
        $this->encryptionCertificate = $encryptionCertificate;
    }

    public function setEncryptionType(SamlEncryptionType $encryptionType)
    {
        $this->encryptionType = $encryptionType->getValue();
    }

    public function setEntityUrl(string $entityUrl)
    {
        $this->entityUrl = $entityUrl;
    }

    public function setIssuer(string $issuer)
    {
        $this->issuer = $issuer;
    }

    public function setSamlIdpSLOBindingEnum(SamlIdpSLOBinding $samlIdpSLOBindingEnum)
    {
        $this->samlIdpSLOBindingEnum = $samlIdpSLOBindingEnum->getValue();
    }

    public function setSamlNameIdFormat(SamlNameIdFormatType $samlNameIdFormat)
    {
        $this->samlNameIdFormat = $samlNameIdFormat->getValue();
    }

    public function setSamlSloUrl(string $samlSloUrl)
    {
        $this->samlSloUrl = $samlSloUrl;
    }

    public function setSamlSubjectCustomAttr(string $samlSubjectCustomAttr)
    {
        $this->samlSubjectCustomAttr = $samlSubjectCustomAttr;
    }

    public function setSamlSubjectType(SamlSubjectType $samlSubjectType)
    {
        $this->samlSubjectType = $samlSubjectType->getValue();
    }
}
