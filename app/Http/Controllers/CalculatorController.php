<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\State;
use App\Services\Budget;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index($id)
    {
        $budget = \App\Models\Budget::query()->find($id);

        return view('calculator.index', compact('budget'));
    }

    public function create()
    {
        $states = State::all();
        return view('calculator.create', compact('states'));
    }

    public function store(Request $request, Budget $budgetService)
    {
        $customer = Customer::query()->create($request->all());
        $state = $customer->state->name;
        $stateKwhAmount = $customer->state->kwh_amount;

        $costPerKwh = Product::query()->firstOrFail('cost_per_kwh');
        $customerKwhMonthly = (float) $customer->energy_bill_amount / $stateKwhAmount;
        $productAmount = $customerKwhMonthly * $costPerKwh->cost_per_kwh;
        $timeToPayReturn = $productAmount / $customer->energy_bill_amount;

        $budget = new \App\Models\Budget();
        $budget->amount = (float) $productAmount;
        $budget->months = ceil($timeToPayReturn);
        $budget->state_name = $state;
        $budget->state_kwh_amount = $stateKwhAmount;
        $budget->product_kwh_cost = $costPerKwh->cost_per_kwh;
        $budget->customer_id = $customer->id;
        $budget->save();

        return redirect()->to("/calculator/{$budget->id}/index");
    }
}
