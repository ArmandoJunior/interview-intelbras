<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Budget;
use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }
    public function customers($id)
    {
        $customer = Customer::query()->findOrFail($id);

        return view('admin.dashboard.customers', compact('customer'));
    }
    public function budgets()
    {
        $budgets = Budget::query()->paginate(4);

        return view('admin.dashboard.budgets', compact('budgets'));
    }
}
