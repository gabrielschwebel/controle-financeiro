<?php

namespace App\Http\Controllers;

use App\Models\OrigemEntrada;
use Illuminate\Http\Request;

class OrigemEntradaController extends Controller
{
    public function index()
    {
        return OrigemEntrada::all();
    }

    public function store(Request $request)
    {
        $OrigemEntrada = new OrigemEntrada();
        $OrigemEntrada::create(['name' => $request['nome']]);

        redirect()->to(route('home-origem-entrada'));
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
