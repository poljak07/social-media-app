<?php
/**
 * User: poljak07
 * Date: 17/10/2024
 * Time: 12:48 AM
 */

namespace App\Http\Enums;

enum GroupUserStatus: string
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
}
