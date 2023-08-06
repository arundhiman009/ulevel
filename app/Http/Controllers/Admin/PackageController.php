<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\Package\PackageListDataTable;
use App\DataTables\Package\PackagePurchaseHistoryDataTable;
use App\DataTables\Package\PackageUpgradeHistoryDataTable;

class PackageController extends Controller
{
    public function index(PackageListDataTable $dataTable)
    {
        return $dataTable->render('admin.package.index');
    }

    public function purchaseHistory(PackagePurchaseHistoryDataTable $dataTable)
    {
        return $dataTable->render('admin.package.purchase_history');
    }

    public function upgradeHistory(PackageUpgradeHistoryDataTable $dataTable)
    {
        return $dataTable->render('admin.package.upgrade_history');
    }
}
