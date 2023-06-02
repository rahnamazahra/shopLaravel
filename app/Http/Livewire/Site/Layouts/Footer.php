<?php

namespace App\Http\Livewire\Site\Layouts;

use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        return view('livewire.site.layouts.footer')->layout('layouts.site');
    }
}
