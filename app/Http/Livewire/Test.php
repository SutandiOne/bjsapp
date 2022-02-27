<?php

namespace App\Http\Livewire;

use App\Models\Klaim;
use Livewire\Component;

class Test extends Component
{

    public $total_jiwa, $total_data, $a, $b;

    public function render()
    {
        $this->total_jiwa = Klaim::all()->sum('rawat_jalan_jiwa');
        $this->total_data = Klaim::count();

        $klaims = Klaim::all();





        // dd($klaims);
        return view('livewire.test', ['klaims' => $klaims]);
    }
}
