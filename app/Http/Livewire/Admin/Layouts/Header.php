<?php

namespace App\Http\Livewire\Admin\Layouts;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        $today_date = verta()->format('%d %B %Y'); 
        return view('livewire.admin.layouts.header', compact('today_date'));
    }
}
