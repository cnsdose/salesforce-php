<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SiteWebAddress
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $certificate
 * @property string|null $domainName
 * @property bool|null $primary
 */
class SiteWebAddress
{
    public static $classMap = [
    ];

    public function setCertificate(string $certificate)
    {
        $this->certificate = $certificate;
    }

    public function setDomainName(string $domainName)
    {
        $this->domainName = $domainName;
    }

    public function setPrimary(bool $primary)
    {
        $this->primary = $primary;
    }
}
