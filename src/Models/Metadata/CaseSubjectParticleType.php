<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class CaseSubjectParticleType extends Enum
{
    const PROVIDED_STRING = 'ProvidedString';
    const SOURCE = 'Source';
    const MESSAGE_TYPE = 'MessageType';
    const SOCIAL_HANDLE = 'SocialHandle';
    const SOCIAL_NETWORK = 'SocialNetwork';
    const SENTIMENT = 'Sentiment';
    const REAL_NAME = 'RealName';
    const CONTENT = 'Content';
    const PIPE_SEPARATOR = 'PipeSeparator';
    const COLON_SEPARATOR = 'ColonSeparator';
    const HYPHEN_SEPARATOR = 'HyphenSeparator';
}
