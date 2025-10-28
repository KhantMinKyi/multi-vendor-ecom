<?php

namespace App\Enums\Enums;

enum PermissionsEnum : string
{
        // SuperAdmin

    // Admin
    case SaveUser = "SaveUser";
    case UpdateUser = "UpdateUser";
    case DeleteUser = "DeleteUser";
    case DisableUser = "DisableUser";
    case ViewSaleReport = "ViewSaleReport";
    case ViewUserKPI = "ViewUserKPI";
    case ApproveVendors = "ApproveVendors";

    // SaleOperator
    case ViewOrderStatus = "ViewOrderStatus";
    case SaveOrderStatus = "SaveOrderStatus";
    case SaveStoreProduct = "SaveStoreProduct";
    case EditStoreProduct = "EditStoreProduct";
    case ViewCustomerDetail = "ViewCustomerDetail";
    
    // StoreOperator
    case GenerateInvoice = "GenerateInvoice";
    case ViewStoreList = "ViewStoreList";
    case ViewStoreHistory = "ViewStoreHistory";
    case ViewStoreProduct = "ViewStoreProduct";
    case ViewAllInvoices = "ViewAllInvoices";
    
    // User
    case BuyProducts = "BuyProducts";
    case ViewProfile = "ViewProfile";
    case ViewInvoices = "ViewInvoices";
    
    //Vendor
    case sellProducts = "sellProducts";
}
