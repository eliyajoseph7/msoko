<?php

namespace App\Livewire\Pages\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use LivewireUI\Modal\ModalComponent;

class UserForm extends ModalComponent
{
    public $action = 'add';
    public $id;

    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $email;

    #[Rule('required')]
    public $phone;

    // #[Rule('required')]
    public $password;

    protected $listeners = [
        'update_user' => 'editUser'
    ];

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public function addUser()
    {
        $this->validate();

        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->password = Hash::make($this->password == null ? '1234' : $this->password);
        $user->save();

        $this->resetForm();
        $this->dispatch('user_saved');
        $this->closeModal();
        $this->dispatch('show_success', 'User saved successfully!');
    }

    public function editUser($id)
    {
        $this->action = 'update';
        $qs = User::find($id);
        $this->id = $id;
        $this->name = $qs->name;
        $this->email = $qs->email;
        $this->phone = $qs->phone;
        
    }

    public function updateUser()
    {
        $this->validate();

        $user = User::find($this->id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;
        if($this->password) {
            $user->password = Hash::make($this->password);
        }

        $user->save();

        $this->resetForm();
        $this->dispatch('user_saved');
        $this->closeModal();
        $this->dispatch('show_success', 'User updated successfully!');
    }

    public function mount($id = null)
    {
        if ($id) {
            $this->editUser($id);
        }
    }


    public function resetForm()
    {
        $this->reset();
    }
    public function render()
    {
        return view('livewire.pages.admin.user.user-form');
    }
}
