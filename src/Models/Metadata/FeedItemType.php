<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FeedItemType extends Enum
{
    const TRACKED_CHANGE = 'TrackedChange';
    const USER_STATUS = 'UserStatus';
    const TEXT_POST = 'TextPost';
    const ADVANCED_TEXT_POST = 'AdvancedTextPost';
    const LINK_POST = 'LinkPost';
    const CONTENT_POST = 'ContentPost';
    const POLL_POST = 'PollPost';
    const RYPPLE_POST = 'RypplePost';
    const PROFILE_SKILL_POST = 'ProfileSkillPost';
    const DASHBOARD_COMPONENT_SNAPSHOT = 'DashboardComponentSnapshot';
    const APPROVAL_POST = 'ApprovalPost';
    const CASE_COMMENT_POST = 'CaseCommentPost';
    const REPLY_POST = 'ReplyPost';
    const EMAIL_MESSAGE_EVENT = 'EmailMessageEvent';
    const CALL_LOG_POST = 'CallLogPost';
    const CHANGE_STATUS_POST = 'ChangeStatusPost';
    const ATTACH_ARTICLE_EVENT = 'AttachArticleEvent';
    const MILESTONE_EVENT = 'MilestoneEvent';
    const ACTIVITY_EVENT = 'ActivityEvent';
    const CHAT_TRANSCRIPT_POST = 'ChatTranscriptPost';
    const COLLABORATION_GROUP_CREATED = 'CollaborationGroupCreated';
    const COLLABORATION_GROUP_UNARCHIVED = 'CollaborationGroupUnarchived';
    const SOCIAL_POST = 'SocialPost';
    const QUESTION_POST = 'QuestionPost';
    const FACEBOOK_POST = 'FacebookPost';
    const BASIC_TEMPLATE_FEED_ITEM = 'BasicTemplateFeedItem';
    const CREATE_RECORD_EVENT = 'CreateRecordEvent';
    const CANVAS_POST = 'CanvasPost';
    const ANNOUNCEMENT_POST = 'AnnouncementPost';
}
