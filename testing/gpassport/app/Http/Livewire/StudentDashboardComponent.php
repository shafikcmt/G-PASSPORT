<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.student-dashboard-component')->layout('layouts.student-base');
    }
}
