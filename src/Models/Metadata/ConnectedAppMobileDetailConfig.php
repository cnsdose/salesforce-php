<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConnectedAppMobileDetailConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $applicationBinaryFile
 * @property string|null $applicationBinaryFileName
 * @property string|null $applicationBundleIdentifier
 * @property int|null $applicationFileLength
 * @property string|null $applicationIconFile
 * @property string|null $applicationIconFileName
 * @property string|null $applicationInstallUrl
 * @property string|null $devicePlatform
 * @property string|null $deviceType
 * @property string|null $minimumOsVersion
 * @property bool|null $privateApp
 * @property string|null $version
 */
class ConnectedAppMobileDetailConfig
{
    public static $classMap = [
    ];

    public function setApplicationBinaryFile(string $applicationBinaryFile)
    {
        $this->applicationBinaryFile = $applicationBinaryFile;
    }

    public function setApplicationBinaryFileName(string $applicationBinaryFileName)
    {
        $this->applicationBinaryFileName = $applicationBinaryFileName;
    }

    public function setApplicationBundleIdentifier(string $applicationBundleIdentifier)
    {
        $this->applicationBundleIdentifier = $applicationBundleIdentifier;
    }

    public function setApplicationFileLength(int $applicationFileLength)
    {
        $this->applicationFileLength = $applicationFileLength;
    }

    public function setApplicationIconFile(string $applicationIconFile)
    {
        $this->applicationIconFile = $applicationIconFile;
    }

    public function setApplicationIconFileName(string $applicationIconFileName)
    {
        $this->applicationIconFileName = $applicationIconFileName;
    }

    public function setApplicationInstallUrl(string $applicationInstallUrl)
    {
        $this->applicationInstallUrl = $applicationInstallUrl;
    }

    public function setDevicePlatform(DevicePlatformType $devicePlatform)
    {
        $this->devicePlatform = $devicePlatform->getValue();
    }

    public function setDeviceType(DeviceType $deviceType)
    {
        $this->deviceType = $deviceType->getValue();
    }

    public function setMinimumOsVersion(string $minimumOsVersion)
    {
        $this->minimumOsVersion = $minimumOsVersion;
    }

    public function setPrivateApp(bool $privateApp)
    {
        $this->privateApp = $privateApp;
    }

    public function setVersion(string $version)
    {
        $this->version = $version;
    }
}
