<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class QuickActionLabel extends Enum
{
    const LOG_ACALL = 'LogACall';
    const LOG_ANOTE = 'LogANote';
    const NEW = 'New';
    const NEW_RECORD_TYPE = 'NewRecordType';
    const UPDATE = 'Update';
    const NEW_CHILD = 'NewChild';
    const NEW_CHILD_RECORD_TYPE = 'NewChildRecordType';
    const CREATE_NEW = 'CreateNew';
    const CREATE_NEW_RECORD_TYPE = 'CreateNewRecordType';
    const SEND_EMAIL = 'SendEmail';
    const QUICK_RECORD_TYPE = 'QuickRecordType';
    const QUICK = 'Quick';
    const EDIT_DESCRIPTION = 'EditDescription';
    const DEFER = 'Defer';
    const CHANGE_DUE_DATE = 'ChangeDueDate';
    const CHANGE_PRIORITY = 'ChangePriority';
    const CHANGE_STATUS = 'ChangeStatus';
    const SOCIAL_POST = 'SocialPost';
    const ESCALATE = 'Escalate';
    const ESCALATE_TO_RECORD = 'EscalateToRecord';
    const OFFER_FEEDBACK = 'OfferFeedback';
    const REQUEST_FEEDBACK = 'RequestFeedback';
    const ADD_RECORD = 'AddRecord';
    const ADD_MEMBER = 'AddMember';
    const REPLY = 'Reply';
    const REPLY_ALL = 'ReplyAll';
    const FORWARD = 'Forward';
    const SCHEDULE_APPOINTMENT = 'ScheduleAppointment';
}
