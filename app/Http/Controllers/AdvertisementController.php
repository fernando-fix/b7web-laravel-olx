<?php

namespace App\Http\Controllers;

use App\Helpers\Alert;
use App\Models\Advertisement;
use Illuminate\Support\Facades\Auth;

class AdvertisementController extends Controller
{
    public function delete($id)
    {
        $advertisement = Advertisement::find($id);

        if (!$advertisement)
            return redirect()->route('dashboard.my-ads');

        if ($advertisement->user_id != Auth::id()) {
            Alert::error("Erro ao tentar excluir anúncio");
            return redirect()->route('dashboard.my-ads');
        }

        $advertisement->delete();

        Alert::success('Anúncio excluído com sucesso!');
        return redirect()->route('dashboard.my-ads');
    }
}
