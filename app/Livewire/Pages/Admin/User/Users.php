<?php

namespace App\Livewire\Pages\Admin\User;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;
    public $sortBy = 'created_at';
    public $sortDir = 'DESC';



    public function updatedSearch()
    {
        $this->resetPage();
    }

    #[On('user_saved')]
    public function reload()
    {
        $this->render();
    }

    #[On('delete_user')]
    public function deleteUser($id)
    {

        User::find($id)->delete();

        $this->dispatch('user_deleted');
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
        $data = User::search($this->search)->orderBy($this->sortBy, $this->sortDir)->where('id', '!=', 1)->paginate($this->perPage);
        return view('livewire.pages.admin.user.users', compact('data'));
    }
}
