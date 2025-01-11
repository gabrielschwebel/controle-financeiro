<?php

namespace App\Http\Controllers;

use App\Models\CategoriaDespesa;
use Illuminate\Http\Request;

class CategoriaDespesaController extends Controller
{
    public function index()
    {
        return CategoriaDespesa::all();
    }

    public function store(Request $request)
    {
        $categoriaDespesa = new CategoriaDespesa();
    }

    public function update(Request $request, $id)
    {
    //
    }

    public function destroy()
    {
    //
    }
}
