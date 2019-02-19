<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class NetworkBranding
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $loginBackgroundImageUrl
 * @property string|null $loginFooterText
 * @property string|null $loginLogo
 * @property string|null $loginLogoName
 * @property string|null $loginPrimaryColor
 * @property string|null $loginQuaternaryColor
 * @property string|null $loginRightFrameUrl
 * @property string|null $network
 * @property string|null $pageFooter
 * @property string|null $pageHeader
 * @property string|null $primaryColor
 * @property string|null $primaryComplementColor
 * @property string|null $quaternaryColor
 * @property string|null $quaternaryComplementColor
 * @property string|null $secondaryColor
 * @property string|null $staticLogoImageUrl
 * @property string|null $tertiaryColor
 * @property string|null $tertiaryComplementColor
 * @property string|null $zeronaryColor
 * @property string|null $zeronaryComplementColor
 */
class NetworkBranding extends MetadataWithContent
{
    public static $classMap = [
    ];

    public function setLoginBackgroundImageUrl(string $loginBackgroundImageUrl)
    {
        $this->loginBackgroundImageUrl = $loginBackgroundImageUrl;
    }

    public function setLoginFooterText(string $loginFooterText)
    {
        $this->loginFooterText = $loginFooterText;
    }

    public function setLoginLogo(string $loginLogo)
    {
        $this->loginLogo = $loginLogo;
    }

    public function setLoginLogoName(string $loginLogoName)
    {
        $this->loginLogoName = $loginLogoName;
    }

    public function setLoginPrimaryColor(string $loginPrimaryColor)
    {
        $this->loginPrimaryColor = $loginPrimaryColor;
    }

    public function setLoginQuaternaryColor(string $loginQuaternaryColor)
    {
        $this->loginQuaternaryColor = $loginQuaternaryColor;
    }

    public function setLoginRightFrameUrl(string $loginRightFrameUrl)
    {
        $this->loginRightFrameUrl = $loginRightFrameUrl;
    }

    public function setNetwork(string $network)
    {
        $this->network = $network;
    }

    public function setPageFooter(string $pageFooter)
    {
        $this->pageFooter = $pageFooter;
    }

    public function setPageHeader(string $pageHeader)
    {
        $this->pageHeader = $pageHeader;
    }

    public function setPrimaryColor(string $primaryColor)
    {
        $this->primaryColor = $primaryColor;
    }

    public function setPrimaryComplementColor(string $primaryComplementColor)
    {
        $this->primaryComplementColor = $primaryComplementColor;
    }

    public function setQuaternaryColor(string $quaternaryColor)
    {
        $this->quaternaryColor = $quaternaryColor;
    }

    public function setQuaternaryComplementColor(string $quaternaryComplementColor)
    {
        $this->quaternaryComplementColor = $quaternaryComplementColor;
    }

    public function setSecondaryColor(string $secondaryColor)
    {
        $this->secondaryColor = $secondaryColor;
    }

    public function setStaticLogoImageUrl(string $staticLogoImageUrl)
    {
        $this->staticLogoImageUrl = $staticLogoImageUrl;
    }

    public function setTertiaryColor(string $tertiaryColor)
    {
        $this->tertiaryColor = $tertiaryColor;
    }

    public function setTertiaryComplementColor(string $tertiaryComplementColor)
    {
        $this->tertiaryComplementColor = $tertiaryComplementColor;
    }

    public function setZeronaryColor(string $zeronaryColor)
    {
        $this->zeronaryColor = $zeronaryColor;
    }

    public function setZeronaryComplementColor(string $zeronaryComplementColor)
    {
        $this->zeronaryComplementColor = $zeronaryComplementColor;
    }
}
