<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use App\Http\Requests\ProfileUpdate;
use Illuminate\Http\Request;
use App\Models\Admin;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.content.profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileUpdate $request, string $id)
    {
        $admin = Admin::find($id);
    
        if ($request->filled('password') && !Hash::check($request->current_password, $admin->password)) {
            $errors = new MessageBag(['current_password' => 'Current password is incorrect.']);
            return back()->withErrors($errors);
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images/users', 'public');
            $admin->image = asset('storage/' . $path);
        }

        if ($request->filled('password'))
            $admin->password = $request->password;

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();
        
        return back()->with('success', 'Profile successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
