<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserComponent extends Component
{
    public $user;

    public function student($id)
    {
        $edit_student = DB::table('students')->where('id',$id)->first();
        dd($edit_student);
    }

    
    public function render()
    {
        return view('livewire.user-component')->layout('livewire.layouts.app')
        ->with([
             'Ratan' => $this->user,
        ]);
    }
}
