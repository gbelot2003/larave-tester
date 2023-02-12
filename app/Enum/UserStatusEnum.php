<?php

namespace App\Enum;

/**
 * Enum for User status activity
 */

enum UserStatusEnum : string
{
    case ACTIVE = 'Active';
    case RESTRICT = 'Restricted';
    case SUSPENDED = 'Suspended';
}
