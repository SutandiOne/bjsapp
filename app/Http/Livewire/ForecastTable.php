<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Forecasting;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class ForecastTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make("Tanggal Dibuat", "created_at")
                ->sortable(),
            Column::make("Tahun", "tahun_mulai")
                ->sortable(),
            Column::make("Tahun Diramal", "tahun_ramalan")
                ->sortable(),
            Column::make("Aksi")
        ];
    }

    public function query(): Builder
    {
        return Forecasting::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.forecast_table';
    }

    public function export($id)
    {
        $forcast = Forecasting::find($id);

        $pdf = PDF::loadView('reports.forcast', compact('forcast'))->setPaper('a4', 'portrait')->output();

        return response()->streamDownload(
            fn () => print($pdf),
            "klaim_bpjs.pdf"
        );
    }
}
