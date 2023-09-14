<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Npm;

public function index()
{
    $npms = Npm::all();
    return view('npm.index', compact('npms'));
}

public function create()
{
    return view('npm.create');
}

public function store(Request $request)
{
    $data = $request->validate([
        'npm' => 'required|string|unique:npms,npm',
        'nama' => 'required|string',
    ]);

    Npm::create($data);

    return redirect('/npm');
}

public function edit($id)
{
    $npm = Npm::findOrFail($id);
    return view('npm.edit', compact('npm'));
}

public function update(Request $request, $id)
{
    $data = $request->validate([
        'npm' => 'required|string|unique:npms,npm,' . $id,
        'nama' => 'required|string',
    ]);

    $npm = Npm::findOrFail($id);
    $npm->update($data);

    return redirect('/npm');
}

public function destroy($id)
{
    $npm = Npm::findOrFail($id);
    $npm->delete();

    return redirect('/npm');
}
