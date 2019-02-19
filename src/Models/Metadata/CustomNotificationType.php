<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomNotificationType
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $customNotifTypeName
 * @property string|null $description
 * @property bool|null $desktop
 * @property bool|null $email
 * @property string|null $masterLabel
 * @property bool|null $mobile
 */
class CustomNotificationType extends Metadata
{
    public static $classMap = [
    ];

    public function setCustomNotifTypeName(string $customNotifTypeName)
    {
        $this->customNotifTypeName = $customNotifTypeName;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDesktop(bool $desktop)
    {
        $this->desktop = $desktop;
    }

    public function setEmail(bool $email)
    {
        $this->email = $email;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setMobile(bool $mobile)
    {
        $this->mobile = $mobile;
    }
}
