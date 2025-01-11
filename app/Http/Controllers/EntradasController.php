<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;

class EntradasController extends Controller
{
    public function index()
    {
        return Entrada::all();
    }

    public function store(Request $request)
    {
        $despesa = new Entrada();
    }

    public function update(Request $request, $id)
    {
        $despesa = Entrada::where($id);
    }

    public function destroy($id)
    {
        //
    }
}
