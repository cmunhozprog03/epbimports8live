<?php

namespace App\Http\Livewire\Admin;

use App\Models\User as ModelsUser;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;
    public function render()
    {
        $users = ModelsUser::paginate(5);
        return view('livewire.admin.user', ['users'=> $users]);
    }
}
