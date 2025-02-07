<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountUpdateRequest;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function my_account()
    {
        $loggedUser = User::find(Auth::id());
        $states = State::orderBy('name')->get();
        return view('web.pages.dashboard.my-account', compact('loggedUser', 'states'));
    }

    public function my_account_action(AccountUpdateRequest $request)
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
        return redirect()->route('dashboard.my-account');
    }

    public function my_ads()
    {
        return view('web.pages.dashboard.my-ads');
    }
}
