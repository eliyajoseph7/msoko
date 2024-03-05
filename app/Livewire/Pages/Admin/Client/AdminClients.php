<?php

namespace App\Livewire\Pages\Admin\Client;

use App\Models\Client;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AdminClients extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;
    public $sortBy = 'created_at';
    public $sortDir = 'DESC';

    public $showForm = false;

    // public $active;

    protected $listeners = [
        'update_client' => 'toggleForm',
    ];


    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    #[On('client_saved')]
    public function reload()
    {
        $this->reset('showForm');
        $this->render();
    }

    #[On('delete_client')]
    public function deleteClient($id)
    {

        $client = Client::find($id);

        $image = $client->image;

        $imgname = str_replace(substr($image, 0, 9), '', $image);
        $check = Storage::disk('public')->exists($imgname);
        if ($check) {
            Storage::disk('public')->delete($imgname);
        }

        $client->delete();

        $this->dispatch('client_deleted');
    }

    public function sortColumn($name)
    {
        if ($this->sortBy == $name) {
            $this->sortDir = ($this->sortDir == 'ASC') ? 'DESC' : 'ASC';
            return;
        }
        $this->sortBy = $name;
        $this->sortDir = 'DESC';
    }
    public function render()
    {
        $data = Client::search($this->search)->orderBy($this->sortBy, $this->sortDir)->paginate($this->perPage);
        return view('livewire.pages.admin.client.admin-clients', compact('data'));
    }
}
