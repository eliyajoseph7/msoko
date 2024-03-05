<?php

namespace App\Livewire\Pages\Admin\Client;

use App\Models\Client;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ClientForm extends Component
{
    use WithFileUploads;

    public $action = 'add';
    public $id;

    #[Rule('required')]
    public $image;
    public $new_image;

    protected $listeners = [
        'update_client' => 'editClient',
    ];


    public function addClient()
    {
        $this->validate();

        $client = new Client;
        $client->user_id = auth()->user()->id;
        $fileNameToSave = null;
        if ($this->image != null) {
            $this->file = (object)$this->image;
            try {
                $file = $this->file->getClientOriginalName();
                $extension = $this->file->getClientOriginalExtension();
                $fileName = pathinfo($file, PATHINFO_FILENAME) . "-" . date('Ymd-His') . "." . $extension;
                $this->file->storeAs('clientImages', $fileName, 'public');

                $fileNameToSave = '/storage/clientImages/' . $fileName;
            } catch (\Throwable $e) {
            }
        }
        $client->image = $fileNameToSave;
        $client->save();

        $this->resetForm();
        $this->dispatch('client_saved');
        $this->dispatch('show_success', 'Client saved successfully!');
    }

    public function editClient($id)
    {
        $this->action = 'update';
        $qs = Client::find($id);
        $this->id = $id;
        $this->image = $qs->image;
    }

    public function updateClient()
    {
        $this->validate();

        $qs = Client::find($this->id);
        $fileNameToSave = null;
        if ($this->new_image != null) {
            $this->file = (object)$this->new_image;
            try {
                $file = $this->file->getClientOriginalName();
                $extension = $this->file->getClientOriginalExtension();
                $fileName = pathinfo($file, PATHINFO_FILENAME) . "-" . date('Ymd-His') . "." . $extension;
                $this->file->storeAs('clientImages', $fileName, 'public');

                $fileNameToSave = '/storage/clientImages/' . $fileName;
            } catch (\Throwable $e) {
            }
            $qs->image = $fileNameToSave;
        }

        $qs->save();

        $this->resetForm();
        $this->dispatch('client_saved');
        $this->dispatch('show_success', 'Client updated successfully!');
    }

    public function mount($id = null)
    {
        if ($id) {
            $this->editClient($id);
        }
    }

    public function resetForm()
    {
        $this->dispatch('reset_category');
        $this->reset();
    }


    public function render()
    {
        return view('livewire.pages.admin.client.client-form');
    }
}
