<?php
/**
 * User: poljak07
 * Date: 17/10/2024
 * Time: 12:49 AM
 */

namespace App\Http\Enums;

enum GroupUserRole: string
{
    case ADMIN = 'admin';
    case USER = 'user';
}
