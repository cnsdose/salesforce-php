<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class VoiceSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableCallDisposition
 * @property bool|null $enableVoiceCallList
 * @property bool|null $enableVoiceCallRecording
 * @property bool|null $enableVoiceCoaching
 * @property bool|null $enableVoiceConferencing
 * @property bool|null $enableVoiceLocalPresence
 * @property bool|null $enableVoiceMail
 * @property bool|null $enableVoiceMailDrop
 */
class VoiceSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableCallDisposition(bool $enableCallDisposition)
    {
        $this->enableCallDisposition = $enableCallDisposition;
    }

    public function setEnableVoiceCallList(bool $enableVoiceCallList)
    {
        $this->enableVoiceCallList = $enableVoiceCallList;
    }

    public function setEnableVoiceCallRecording(bool $enableVoiceCallRecording)
    {
        $this->enableVoiceCallRecording = $enableVoiceCallRecording;
    }

    public function setEnableVoiceCoaching(bool $enableVoiceCoaching)
    {
        $this->enableVoiceCoaching = $enableVoiceCoaching;
    }

    public function setEnableVoiceConferencing(bool $enableVoiceConferencing)
    {
        $this->enableVoiceConferencing = $enableVoiceConferencing;
    }

    public function setEnableVoiceLocalPresence(bool $enableVoiceLocalPresence)
    {
        $this->enableVoiceLocalPresence = $enableVoiceLocalPresence;
    }

    public function setEnableVoiceMail(bool $enableVoiceMail)
    {
        $this->enableVoiceMail = $enableVoiceMail;
    }

    public function setEnableVoiceMailDrop(bool $enableVoiceMailDrop)
    {
        $this->enableVoiceMailDrop = $enableVoiceMailDrop;
    }
}
