<?php

namespace App\Livewire\Pages\Entrada;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class CreateEntrada extends Component
{
    public function render()
    {
        return view('livewire.pages.entrada.create-entrada');
    }
}
