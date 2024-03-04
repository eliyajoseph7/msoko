<?php

namespace App\Livewire\Pages\Public\Service;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layout.public.guest')]
class Services extends Component
{
    public function render()
    {
        return view('livewire.pages.public.service.services');
    }
}
