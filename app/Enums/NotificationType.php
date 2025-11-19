<?php

namespace App\Enums;

enum NotificationType : string
{
    case PUSH = 'push';
    case EMAIL = 'email';
    case SMS = 'sms';
}
