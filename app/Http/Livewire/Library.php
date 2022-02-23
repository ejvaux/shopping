<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;

class Library extends Component
{
    public $library;

    public function mount()
    {
        $this->library = \App\Library::where('user_id','=',Auth::user()->id)->get();
    }

    public function render()
    {
        return view('livewire.library-table');
    }
}
