<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    protected function getListeners()
    {
        return [
            '$refresh'
        ];
    }
    
    public function render()
    {
        return view('livewire.user.user-index', [
            'users' => $this->getUsers()
        ]);
    }

    public function getUsers()
    {
        return User::orderByDesc('created_at')->get();
    }

    public function edit(User $user)
    {
        $this->emit('editUser', $user);
    }

    public function delete(User $user)
    {
        $user->delete();
    }
}
