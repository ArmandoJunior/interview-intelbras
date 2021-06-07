<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index()
    {
        $states = State::query()->paginate(9);

        return view('admin.state.index', compact('states'));
    }

    public function create()
    {
        return view('admin.state.create');
    }

    public function store(Request $request)
    {
        State::query()->create($request->all());

        return redirect()->to('/admin/state/index');
    }

    public function edit($id)
    {
        $state = State::query()->find($id);
        if (!$state) abort(404);

        return view('admin.state.edit', compact('state'));
    }

    public function update(Request $request, $id)
    {
        $state = State::query()->find($id);
        if (!$state) abort(404);
        $state->name = $request->name;
        $state->initials = $request->initials;
        $state->kwh_amount = (float) str_replace('R$ ', '', $request->kwh_amount);
        $state->save();
        return redirect()->to('/admin/state/index');
    }
}
