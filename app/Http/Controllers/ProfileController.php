<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $loggedUser = User::find(Auth::id());
        $states = State::orderBy('name')->get();
        return view('admin.pages.profile.edit', compact('loggedUser', 'states'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $loggedUser = User::find(Auth::id());
        if (!$loggedUser) {
            return redirect()->route('login');
        }

        if ($request->password && ($request->password == $request->password_confirmation)) {
            $loggedUser->password = bcrypt($request->password);
            $loggedUser->save();
        }

        $loggedUser->update([
            'name' => $request->name,
            'email' => $request->email,
            'state_id' => $request->state_id,
        ]);

        alert()->success('Registro realizado com sucesso');
        return redirect()->route('profile.edit', Auth::user());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
