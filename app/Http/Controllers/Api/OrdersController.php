<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function userCompletedOrders()
    {
        $orders = User::find(1)?->completedOrders()->get();
        return response()->json(['orders' => $orders]);
    }
}
