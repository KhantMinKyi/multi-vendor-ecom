<?php

namespace App\Enums\Enums;

enum RolesEnum:string
{
        case SuperAdmin = 'SuperAdmin';
    case Admin = 'Admin';
    case StoreOperator = 'StoreOperator';
    case SaleOperator = 'SaleOperator';
    case Vendor = 'Vendor';
    case User = 'User';
}
