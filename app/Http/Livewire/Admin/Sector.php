<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Sector extends Component
{
    public $name;
    public $description;
    
    public function render()
    {
        return view('livewire.admin.sector');
    }
}
