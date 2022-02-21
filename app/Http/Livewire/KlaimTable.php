<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Klaim;


class KlaimTable extends DataTableComponent
{

    public bool $columnSelect = true;

    public function columns(): array
    {
        return [
            Column::make("Tahun", "tahun")
                ->sortable(),
            Column::make("Rawat Jalan", "rawat_jalan_jiwa")
                ->sortable(),
            Column::make("Rawat Inap", "rawat_inap_jiwa")
                ->sortable(),
            Column::make("Aksi"),
        ];
    }

    public function query(): Builder
    {
        return Klaim::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.klaim_table';
    }

    public function delete($id)
    {
        Klaim::find($id)->delete();
        session()->flash('message', 'Data deleted successfully.');
    }
}
