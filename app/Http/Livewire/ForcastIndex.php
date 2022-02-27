<?php

namespace App\Http\Livewire;

use App\Models\Klaim;
use Livewire\Component;

class ForcastIndex extends Component
{

    public $klaim, $kategori, $tahun;

    public function render()
    {
        $this->klaim = Klaim::all();
        return view('livewire.forcast-index');
    }

    public function forecasting()
    {


        if ($this->tahun && $this->kategori) {

            return redirect()->route('forcast.chart', ['id' => $this->tahun, 'kategori' => $this->kategori]);
        } else {
            session()->flash('message', 'Pilih Klaim Tahun dan Kategori');
        }
    }
}
