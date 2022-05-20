<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Klaim;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class ForecastTable extends DataTableComponent
{

    public bool $columnSelect = true;

    public function columns(): array
    {
        return [
            Column::make("Tahun", "tahun")
                ->sortable(),
            Column::make("Rawat Jalan", "rawat_jalan_jiwa")
                ->sortable(),
            Column::make("S", "rawat_jalan_s")
                ->sortable(),
            Column::make("S", "rawat_jalan_s2")
                ->sortable(),
            Column::make("Rawat Jalan Ramalan", "rawat_jalan_forecast")
                ->sortable(),
            Column::make("Rawat Inap", "rawat_inap_jiwa")
                ->sortable(),
            Column::make("Rawat Inap Ramalan", "rawat_inap_forecast")
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return Klaim::query()->where('rawat_jalan_s', '!=', null);
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.forecast_table';
    }

    public function export($id)
    {
        $forcast = Klaim::find($id);

        $pdf = PDF::loadView('reports.forcast', compact('forcast'))->setPaper('a4', 'portrait')->output();

        return response()->streamDownload(
            fn () => print($pdf),
            "klaim_bpjs.pdf"
        );
    }
}
