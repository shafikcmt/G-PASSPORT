<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChangeProfileComponent extends Component
{
    public function render()
    {
        return view('livewire.change-profile-component')->layout("layouts.student-base");
    }
}
