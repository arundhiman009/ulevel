<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\Withdraw\PendingWithdrawDataTable;
use App\DataTables\Withdraw\WithdrawDataTable;
use App\DataTables\Withdraw\CancelWithdrawDataTable;

class MoneyController extends Controller
{
    public function pending(PendingWithdrawDataTable $dataTable)
    {
        return $dataTable->render('admin.withdraw_money.pending');
    }

    public function withdraw(WithdrawDataTable $dataTable)
    {
        return $dataTable->render('admin.withdraw_money.index');
    }

    public function cancel(CancelWithdrawDataTable $dataTable)
    {
        return $dataTable->render('admin.withdraw_money.cancel');
    }
}
