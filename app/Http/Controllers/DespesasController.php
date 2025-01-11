<?php

namespace App\Http\Controllers;

use App\Models\Despesa;
use Illuminate\Http\Request;

class DespesasController extends Controller
{
    public function index()
    {
        return Despesa::all();
    }

    public function store(Request $request)
    {
        $Despesa = new Despesa();
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
    //
    }

    public function filtrarPorCategoria($id)
    {
    //
    }

    public function filtrarPorTipo($id)
    {
    //
    }
}
