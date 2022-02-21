<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Exports\KlaimExport;
use Maatwebsite\Excel\Facades\Excel;

class KlaimIndex extends Component
{
    public function render()
    {
        return view('livewire.klaim-index');
    }

    public function exports()
    {
        return Excel::download(new KlaimExport, 'klaim_all.xlsx');
    }
}
