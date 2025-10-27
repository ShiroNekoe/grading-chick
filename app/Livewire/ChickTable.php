<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ChickData;

class ChickTable extends Component
{
    public function render()
    {
        $chicks = ChickData::latest()->take(10)->get();
        return view('livewire.chick-table', compact('chicks'));
    }
}
