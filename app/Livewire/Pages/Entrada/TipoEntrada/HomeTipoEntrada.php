<?php

namespace App\Livewire\Pages\Entrada\TipoEntrada;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.settings')]
class HomeTipoEntrada extends Component
{

    public $headers = ['Nome', 'Descrição'];
    public $origemEntrada = [];
    public function render()
    {
        return view('livewire.pages.entrada.tipo-entrada.home-tipo-entrada');
    }
}
