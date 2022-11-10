<?php

namespace App\Http\Livewire\User;

use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Models\User;
use Livewire\Component;

class UserManage extends Component
{
    public $id_user;
    public $name;
    public $email;
    public $password;
    public $confirm_password;

    public $mode;

    protected function getListeners()
    {
        return [
            'editUser' => 'loadUser'
        ];
    }

    public function render()
    {
        return view('livewire.user.user-manage');
    }

    public function mount()
    {
        $this->id_user = null;
        $this->mode = "create";
    }

    public function create()
    {
        $dataValidated = $this->validate((new UserStoreRequest())->rules());
        $dataValidated['password'] = bcrypt($dataValidated['password']);
        User::create($dataValidated);
        $this->resetInput();
        $this->emitTo('user.user-index', '$refresh');
        session()->flash('success', __('The user was created successfully'));
    }

    public function edit()
    {
        $user = User::find($this->id_user);
        $dataValidated = $this->validate((new UserUpdateRequest())->rules($user));
        $dataValidated['password'] = bcrypt($dataValidated['password']);
        $user->update($dataValidated);
        $this->resetInput();
        $this->emitTo('user.user-index', '$refresh');
        session()->flash('success', __('The user was updated successfully'));
    }

    public function loadUser(User $user)
    {
        $this->mode = "edit";
        $this->id_user = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function resetInput()
    {
        $this->mode = "create";
        $this->reset([
            'id',
            'name',
            'email',
            'password',
            'confirm_password',
        ]);
    }
}
