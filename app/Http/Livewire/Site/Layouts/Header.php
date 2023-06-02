<?php

namespace App\Http\Livewire\Site\Layouts;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.site.layouts.header')->layout('layouts.site');
    }
}
