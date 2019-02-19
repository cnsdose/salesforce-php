<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ChatterAnswersSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $emailFollowersOnBestAnswer
 * @property bool|null $emailFollowersOnReply
 * @property bool|null $emailOwnerOnPrivateReply
 * @property bool|null $emailOwnerOnReply
 * @property bool|null $enableAnswerViaEmail
 * @property bool|null $enableChatterAnswers
 * @property bool|null $enableFacebookSSO
 * @property bool|null $enableInlinePublisher
 * @property bool|null $enableReputation
 * @property bool|null $enableRichTextEditor
 * @property string|null $facebookAuthProvider
 * @property bool|null $showInPortals
 */
class ChatterAnswersSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEmailFollowersOnBestAnswer(bool $emailFollowersOnBestAnswer)
    {
        $this->emailFollowersOnBestAnswer = $emailFollowersOnBestAnswer;
    }

    public function setEmailFollowersOnReply(bool $emailFollowersOnReply)
    {
        $this->emailFollowersOnReply = $emailFollowersOnReply;
    }

    public function setEmailOwnerOnPrivateReply(bool $emailOwnerOnPrivateReply)
    {
        $this->emailOwnerOnPrivateReply = $emailOwnerOnPrivateReply;
    }

    public function setEmailOwnerOnReply(bool $emailOwnerOnReply)
    {
        $this->emailOwnerOnReply = $emailOwnerOnReply;
    }

    public function setEnableAnswerViaEmail(bool $enableAnswerViaEmail)
    {
        $this->enableAnswerViaEmail = $enableAnswerViaEmail;
    }

    public function setEnableChatterAnswers(bool $enableChatterAnswers)
    {
        $this->enableChatterAnswers = $enableChatterAnswers;
    }

    public function setEnableFacebookSSO(bool $enableFacebookSSO)
    {
        $this->enableFacebookSSO = $enableFacebookSSO;
    }

    public function setEnableInlinePublisher(bool $enableInlinePublisher)
    {
        $this->enableInlinePublisher = $enableInlinePublisher;
    }

    public function setEnableReputation(bool $enableReputation)
    {
        $this->enableReputation = $enableReputation;
    }

    public function setEnableRichTextEditor(bool $enableRichTextEditor)
    {
        $this->enableRichTextEditor = $enableRichTextEditor;
    }

    public function setFacebookAuthProvider(string $facebookAuthProvider)
    {
        $this->facebookAuthProvider = $facebookAuthProvider;
    }

    public function setShowInPortals(bool $showInPortals)
    {
        $this->showInPortals = $showInPortals;
    }
}
