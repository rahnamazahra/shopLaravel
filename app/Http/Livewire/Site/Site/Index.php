<?php

namespace App\Http\Livewire\Site\Site;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.site.site.index')->layout('layouts.site');
    }
}
