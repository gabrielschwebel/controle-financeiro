<?php

namespace App\Livewire\Pages\Entrada;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class HomeEntrada extends Component
{

    public $headers =[ 'Nome', 'E-mail', 'Data de Cadastro'];
    public $users;

    public function mount()
    {
        $this->users = User::all() ;
    }
    
    public function render()
    {
        return view('livewire.pages.entrada.home-entrada');
    }

    
}
