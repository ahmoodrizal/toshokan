<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', '!=', 'Admin')
            ->latest()
            ->orderBy('role', 'asc')
            ->orderBy('name', 'asc')
            ->paginate(10);

        return view('admin.user.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    public function store(Request $request, User $user)
    {
        $user->update([
            'status' => 'active'
        ]);

        return redirect(route('admin.users.show', compact('user')));
    }
}
