<?php

namespace App\Livewire\Pages\Public\Home;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layout.public.guest')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.pages.public.home.home');
    }
}
