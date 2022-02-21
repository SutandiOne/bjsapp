<?php

namespace App\Http\Livewire;

use App\Models\Klaim;
use Livewire\Component;

class ForcastChart extends Component
{
    public $tahun, $rawat, $jiwa;

    public function mount($id, $kategori)
    {
        $this->tahun = $id;
        $this->rawat = ($kategori = 'rjj') ? 'rawat_jalan_jiwa' : 'rawat_inap_jiwa';
        $data = Klaim::findOrFail($id);

        if ($data) {
            $this->jiwa = ($kategori = 'rjj') ? $data->rawat_jalan_jiwa : $data->rawat_inap_jiwa;
        }
    }

    public function render()
    {
        return view('livewire.forcast-chart');
    }
}
