<?php

namespace App\Livewire\Pages\Settings;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.settings')]
class HomeSettings extends Component
{
    public function render()
    {
        return view('livewire.pages.settings.home-settings');
    }
}
