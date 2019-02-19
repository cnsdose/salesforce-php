<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class LiveChatButtonInviteStartPosition extends Enum
{
    const TOP_LEFT = 'TopLeft';
    const TOP_LEFT_TOP = 'TopLeftTop';
    const TOP = 'Top';
    const TOP_RIGHT_TOP = 'TopRightTop';
    const TOP_RIGHT = 'TopRight';
    const TOP_RIGHT_RIGHT = 'TopRightRight';
    const RIGHT = 'Right';
    const BOTTOM_RIGHT_RIGHT = 'BottomRightRight';
    const BOTTOM_RIGHT = 'BottomRight';
    const BOTTOM_RIGHT_BOTTOM = 'BottomRightBottom';
    const BOTTOM = 'Bottom';
    const BOTTOM_LEFT_BOTTOM = 'BottomLeftBottom';
    const BOTTOM_LEFT = 'BottomLeft';
    const BOTTOM_LEFT_LEFT = 'BottomLeftLeft';
    const LEFT = 'Left';
    const TOP_LEFT_LEFT = 'TopLeftLeft';
}
