<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Klaim;


class KlaimTable extends DataTableComponent
{

    public bool $columnSelect = true;
    public $last;

    public function mount()
    {
        $klaim_last = Klaim::orderBy('tahun', 'DESC')->where('rawat_jalan_jiwa', '!=', null)->first('tahun');

        $count = Klaim::all()->where('rawat_jalan_jiwa', '!=', null)->count();

        if ($count >= 1) {
            $this->last = $klaim_last->tahun;
        } else {
            $this->last = $klaim_last ? $klaim_last->tahun - 1 : null;
        }
    }

    public function columns(): array
    {
        return [
            Column::make("Tahun", "tahun")
                ->sortable(),
            Column::make("Rawat Jalan", "rawat_jalan_jiwa")
                ->sortable(),
            // Column::make("S", "rawat_jalan_s")
            //     ->sortable(),
            // Column::make("Forecast", "rawat_jalan_forecast")
            //     ->sortable(),
            Column::make("Rawat Inap", "rawat_inap_jiwa")
                ->sortable(),
            Column::make("Aksi"),
        ];
    }

    public function query(): Builder
    {
        return Klaim::query()->where('rawat_jalan_jiwa', '!=', null);
        // return Klaim::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.klaim_table';
    }

    public function configure(): void
    {
        $this->setRefreshMethod('refresh');
    }


    public function delete($id)
    {
        $count = Klaim::all()->count();

        Klaim::find($id)->delete();

        if ($count > 2) {
            $klaim = Klaim::find($id + 1);
            if ($klaim) {
                $klaim->delete();
            }
        }


        session()->flash('message', 'Data deleted successfully.');

        return redirect()->route('klaim.index');
    }
}
