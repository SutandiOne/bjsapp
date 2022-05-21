<?php

namespace App\Http\Livewire;

use App\Models\Klaim;
use Livewire\Component;

class ForcastIndex extends Component
{

    public $klaim;

    public function render()
    {
        //tahun yang bisa diramal?
        $count = Klaim::all()->count() - 2;
        $this->klaim = Klaim::orderBy('tahun', 'DESC')->take($count)->get();

        return view('livewire.forcast-index');
    }
}
