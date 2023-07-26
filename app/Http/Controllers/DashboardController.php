<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
  // Dashboard - Analytics
  public function dashboardAnalytics()
  {
    
    $pageConfigs = ['pageHeader' => false];
    $data = [
                "users"     => User::count(),
                "withdraw"  => 10,
                "commision" => 200,
                "products"  => 290,
                "sales"     => 20,
                "order"     => 20,              
            ];

    return view('/content/dashboard/dashboard-analytics', ['pageConfigs' => $pageConfigs, 'data' => $data]);
  }

  // Dashboard - Ecommerce
  public function dashboardEcommerce()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/content/dashboard/dashboard-ecommerce', ['pageConfigs' => $pageConfigs]);
  }
}
