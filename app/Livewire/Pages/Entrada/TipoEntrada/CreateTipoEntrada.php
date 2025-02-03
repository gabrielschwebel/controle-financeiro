<?php

namespace App\Livewire\Pages\Entrada\TipoEntrada;

use App\Models\OrigemEntrada;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.settings')]
class CreateTipoEntrada extends Component
{
    #[Rule('required')]
    public $nome;

    public function render()
    {
        return view('livewire.pages.entrada.tipo-entrada.create-tipo-entrada');
    }


    public function store(){
        $this->validate();

        $origemEntrada = new OrigemEntrada();
        $origemEntrada->nome = $this->nome;

        if($origemEntrada::create(['nome' => $this->nome]))
        {
            redirect()->to(route('home-origem-entrada'));
        }
    }
}
