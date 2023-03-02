<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Customer\CustomerServiceInterface;
use App\Services\Order\OrderServiceInterface;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
class DashboarController extends Controller
{
  

    public function index(Request $request)
    {
        return view('admin.dashboard');
    }
}


