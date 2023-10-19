<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{

public function index()
{
    $users = User::all();
    return view('users.index', compact('users'));
}

public function create()
{
    return view('users.create');
}

public function store(Request $request)
{
    // Validate and save the new user
}

public function show($id)
{
    $user = User::find($id);
    return view('users.show', compact('user'));
}

public function edit($id)
{
    $user = User::find($id);
    return view('users.edit', compact('user'));
}

public function update(Request $request, $id)
{
    // Validate and update the user
}

public function destroy($id)
{
    // Delete the user
}

}