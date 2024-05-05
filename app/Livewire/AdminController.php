<?php

namespace App\Livewire;

use Livewire\Component;

class AdminController extends Component
{
    public function render()
    {
        return view('livewire.admin-controller')->layout('livewire.layouts.app');
    }
}
