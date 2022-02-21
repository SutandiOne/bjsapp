<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Forecasting;

class ForecastTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make("Tanggal Dibuat", "created_at")
                ->sortable(),
            Column::make("Tahun", "start_year")
                ->sortable(),
            Column::make("Tahun Diramal", "forecast_year")
                ->sortable()
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
}
