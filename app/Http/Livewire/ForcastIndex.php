<?php

namespace App\Http\Livewire;

use App\Models\Klaim;
use Livewire\Component;

class ForcastIndex extends Component
{

    public $klaim,
        $kategori, $tahun,
        //constanta alpha = 0.4 alpha2 = 1 - aplha (0.6)
        $aph = 0.4, $aph2 = 0.6;

    public function render()
    {
        //tahun yang bisa diramal?
        $count = Klaim::all()->count() - 2;
        $this->klaim = Klaim::orderBy('tahun', 'DESC')->take($count)->get();

        return view('livewire.forcast-index');
    }

    public function forecasting()
    {


        // if ($this->tahun && $this->kategori) {

        //     return redirect()->route('forcast.chart', ['id' => $this->tahun, 'kategori' => $this->kategori]);
        // } else {
        //     session()->flash('message', 'Pilih Klaim Tahun dan Kategori');
        // }

        //define year
        //$year1 = $this->tahun - 1;
        // $year1_data = Klaim::find($year1)[$this->kategori];
        $year1_data = 476.2;
        //$year2 = $this->tahun - 2;
        // $year2_data = Klaim::find($year2)[$this->kategori];
        $year2_data = 469;

        //tahap awal = alpha (tahun sebelumnya) + aplha 2 (tahun terakhir)
        $tahap_awal = ($this->aph * $year1_data) + ($this->aph2 * $year2_data);
        // dd($tahap_awal);

        //tahap kedua = alpha (tahap awal) + alpha 2 (tahun terakhir)
        $tahap_kedua = ($this->aph * $tahap_awal) + ($this->aph2 * $year2_data);
        // dd($tahap_kedua);

        //tahap ketiga = 2 (tahap awal) - tahap kedua
        $tahap_ketiga = (2 * $tahap_awal) - $tahap_kedua;
        // dd($tahap_ketiga);

        //tahap keempat = tahap awal - tahap kedua
        $aph3 = $this->aph / $this->aph2;
        $tahap_keempat = ($tahap_awal - $tahap_kedua) * $aph3;
        // dd($tahap_keempat);

        //tahap akhir = tahap ketiga + tahap keempat
        $tahap_akhir = $tahap_ketiga + $tahap_keempat;

        dd(ceil($tahap_akhir));
    }
}
