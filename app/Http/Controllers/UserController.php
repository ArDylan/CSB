<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.user_management.index');
    }
    public function create()
    {
        return view('admin.user_management.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect(route('user'));
    }

    public function edit(User $user)
    {
        return view('admin.user_management.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validate = [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
        ];

        $validatedData = $request->validate($validate);

        $user->update($validatedData);

        if($request->password != null){
            $user->update(['password' => Hash::make($request->password)]);
        }

        return redirect(route('user'));
    }

    public function delete(User $user)
    {
        $user->delete();
        return back();
    }
}
