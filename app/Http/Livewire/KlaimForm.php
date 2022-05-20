<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Klaim;

class KlaimForm extends Component
{

    public $tahun, $rawat_jalan_jiwa, $rawat_inap_jiwa, $count;

    public function mount($id = null)
    {
        $klaim = Klaim::orderBy('tahun', 'DESC')->where('rawat_jalan_jiwa', '!=', null)->first('tahun');
        $data = Klaim::find($id);

        $klaim_tahun  = $klaim != null ? $klaim->tahun + 1 : null;

        $this->tahun = $data ? $id : $klaim_tahun;
        $this->rawat_jalan_jiwa = $data ? $data->rawat_jalan_jiwa : '';
        $this->rawat_inap_jiwa = $data ? $data->rawat_inap_jiwa : '';
    }

    public function store()
    {
        $data = $this->validate([
            'tahun' => 'required|integer',
            'rawat_jalan_jiwa' => 'required|integer',
            'rawat_inap_jiwa' => 'required|integer'
        ]);

        //simpan data real
        $klaimReal = Klaim::updateOrCreate(['tahun' => $this->tahun], ['rawat_jalan_jiwa' => $this->rawat_jalan_jiwa, 'rawat_inap_jiwa' => $this->rawat_inap_jiwa]);

        //get tahun forecast
        $tahunForcast = $this->tahun + 1;

        //get forecast inap&jiwa
        $data_inap = $this->forcasting($tahunForcast,  'rawat_inap');
        $data_jalan = $this->forcasting($tahunForcast, 'rawat_jalan');



        //buat data forecast
        if ($data_inap !== null &&  $data_jalan !== null) {

            $klaimForcast = Klaim::updateOrCreate(
                ['tahun' => $tahunForcast],
                [
                    'rawat_jalan_s' => $data_jalan['tahap_awal'],
                    'rawat_jalan_s2' => $data_jalan['tahap_kedua'],
                    'rawat_jalan_forecast' => $data_jalan['tahap_akhir'],
                    'rawat_inap_s' => $data_inap['tahap_awal'],
                    'rawat_inap_s2' => $data_inap['tahap_kedua'],
                    'rawat_inap_forecast' => $data_inap['tahap_akhir'],
                ]
            );
        }

        session()->flash('message', 'Data berhasil disimpan.');

        return redirect()->route('klaim.index');
    }

    public function forcasting($tahun, $kategori)
    {
        $aph = 0.4;
        $aph2 = 0.6;

        //define year
        $year1 = $tahun - 1;
        $year1_data = Klaim::find($year1);
        $year2 = $tahun - 2;
        $year2_data = Klaim::find($year2);

        if ($year2_data !== null) {

            $kategori1 = $kategori . '_jiwa';
            $kategori2 = $year2_data[$kategori . '_s'] ? $kategori . '_s' : $kategori . '_jiwa';
            $kategori21 = $year2_data[$kategori . '_s2'] ? $kategori . '_s2' : $kategori . '_jiwa';

            $year1_data = $year1_data[$kategori1];
            $year2_data = $year2_data[$kategori2];
            $year21_data = $year2_data[$kategori21];

            $tahap_awal = ($aph * $year1_data) + ($aph2 * $year2_data);

            $tahap_kedua = ($aph * $tahap_awal) + ($aph2 * $year21_data);

            $tahap_ketiga = (2 * $tahap_awal) - $tahap_kedua;

            $aph3 = $aph / $aph2;
            $tahap_keempat = ($tahap_awal - $tahap_kedua) / $aph;

            $tahap_akhir = $tahap_ketiga + $tahap_keempat;

            return ['tahap_awal' => $tahap_awal, 'tahap_kedua' => $tahap_kedua, 'tahap_akhir' => ceil($tahap_akhir)];
        } else {
            return null;
        }
    }

    public function render()
    {
        return view('livewire.klaim-form');
    }
}
