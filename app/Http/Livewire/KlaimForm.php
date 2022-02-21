<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Klaim;

class KlaimForm extends Component
{

    public $ids, $tahun, $rawat_jalan_jiwa, $rawat_inap_jiwa;

    public function mount($id = null)
    {
        $this->ids = $id;
        $data = Klaim::find($id);
        if ($data) {
            $this->tahun = $id;
            $this->rawat_jalan_jiwa = $data->rawat_jalan_jiwa;
            $this->rawat_inap_jiwa = $data->rawat_inap_jiwa;
        }
    }
    public function store()
    {
        $data = $this->validate([
            'tahun' => 'required|integer',
            'rawat_jalan_jiwa' => 'required|integer',
            'rawat_inap_jiwa' => 'required|integer'
        ]);

        $klaim = Klaim::updateOrCreate(['tahun' => $this->tahun], ['rawat_jalan_jiwa' => $this->rawat_jalan_jiwa, 'rawat_inap_jiwa' => $this->rawat_inap_jiwa]);

        session()->flash('message', $this->ids ? 'Data berhasil dirubah.' : 'Data berhasil ditambah.');

        return redirect()->route('klaim.index');
    }

    public function render()
    {
        return view('livewire.klaim-form');
    }
}
