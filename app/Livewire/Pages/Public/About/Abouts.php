<?php

namespace App\Livewire\Pages\Public\About;

use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('livewire.layout.public.guest')]
class Abouts extends Component
{
    public function render()
    {
        return view('livewire.pages.public.about.abouts');
    }
}
