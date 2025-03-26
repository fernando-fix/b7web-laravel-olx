<?php

namespace App\Http\Controllers;

use App\Helpers\Alert;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertisements = Advertisement::where('user_id', Auth::id())->get();
        return view('admin.pages.advertisements.index', compact('advertisements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.advertisement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Advertisement $advertisement)
    {
        return redirect()->route('advertisements.edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advertisement $advertisement)
    {
        return view('web.pages.advertisement.edit', compact('advertisement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advertisement $advertisement)
    {
        if (!$advertisement)
            return redirect()->route('advertisements.index');

        if ($advertisement->user_id != Auth::id()) {
            Alert::error("Erro ao tentar excluir anúncio");
            return redirect()->route('advertisements.index');
        }

        $advertisement->delete();

        Alert::success('Anúncio excluído com sucesso!');
        return redirect()->route('advertisements.index');
    }
}
