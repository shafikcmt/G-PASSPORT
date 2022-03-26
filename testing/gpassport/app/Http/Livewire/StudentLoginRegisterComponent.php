<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentLoginRegisterComponent extends Component
{
    public function render()
    {
        return view('livewire.student-login-register-component')->layout('layouts.admin-base');
    }
}
