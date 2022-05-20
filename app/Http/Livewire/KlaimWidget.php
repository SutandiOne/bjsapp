<?php

namespace App\Http\Livewire;

use App\Models\Klaim;
use Livewire\Component;

class KlaimWidget extends Component
{
    public function render()
    {
        $this->klaim_jalan = Klaim::all()->sum('rawat_jalan_jiwa');
        $this->klaim_inap = Klaim::all()->sum('rawat_inap_jiwa');
        $this->klaim_total = $this->klaim_inap + $this->klaim_jalan;

        $this->klaim_first = Klaim::orderBy('tahun', 'ASC')->first('tahun');
        $this->klaim_latest = Klaim::orderBy('tahun', 'DESC')->where('rawat_inap_jiwa', '!=', null)->first('tahun');



        return view('livewire.klaim-widget');
    }
}
