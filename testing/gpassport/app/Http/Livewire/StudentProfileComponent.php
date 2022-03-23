<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentProfileComponent extends Component
{
    public function render()
    {
        return view('livewire.student-profile-component')->layout('layouts.student-base');
    }
}
