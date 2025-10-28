<?php

namespace Database\Seeders;

use App\Enums\Enums\PermissionsEnum;
use App\Enums\Enums\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRole               = Role::create(['name'=>RolesEnum::User->value]);
        $vendorRole             = Role::create(['name'=>RolesEnum::Vendor->value]);
        $storeOperatorRole      = Role::create(['name'=>RolesEnum::StoreOperator->value]);
        $saleOperatorRole       = Role::create(['name'=>RolesEnum::SaleOperator->value]);
        $adminRole              = Role::create(['name'=>RolesEnum::Admin->value]);
        $superAdminRole         = Role::create(['name'=>RolesEnum::SuperAdmin->value]);

        $approveVendors         = Permission::create(['name'=>PermissionsEnum::ApproveVendors->value]);
        $sellProducts           = Permission::create(['name'=>PermissionsEnum::sellProducts->value]);
        $buyProducts            = Permission::create(['name'=>PermissionsEnum::BuyProducts->value]);
        $viewProfile            = Permission::create(['name'=>PermissionsEnum::ViewProfile->value]);
        $viewInvoices            = Permission::create(['name'=>PermissionsEnum::ViewInvoices->value]);
        
        // User
        $userRole->syncPermissions([
            $buyProducts,
            $viewProfile,
            $viewInvoices
        ]);

        // Vendor
        $vendorRole->syncPermissions([
            $buyProducts,
            $sellProducts,
            $viewProfile,
            $viewInvoices
        ]);

        // Admin
        $adminRole->syncPermissions([
            $buyProducts,
            $sellProducts,
            $viewProfile,
            $viewInvoices,
            $approveVendors
        ]);
    }
}
