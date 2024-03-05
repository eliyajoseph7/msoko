<?php

namespace App\Livewire\Pages\Public\Home\Components;

use App\Models\Client;
use Livewire\Component;

class Clients extends Component
{
    public function render()
    {
        $clients = Client::all();
        return view('livewire.pages.public.home.components.clients', compact('clients'));
    }
}
