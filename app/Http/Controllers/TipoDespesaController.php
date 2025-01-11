<?php

namespace App\Http\Controllers;

use App\Models\TipoDespesa;
use Illuminate\Http\Request;

class TipoDespesaController extends Controller
{
    public function index()
    {
        return TipoDespesa::all();
    }

    public function store(Request $request)
    {
        $tipoDespesa = new TipoDespesa();
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
    //
    }
}
