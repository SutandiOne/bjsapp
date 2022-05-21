<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Klaim;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;

class KlaimChart extends Component
{


    public $types = ['food', 'shopping', 'entertainment', 'travel', 'other'];

    public function colors()
    {
        // return sprintf('#%06X', mt_rand(0xFF9999, 0xFFFF00));
        return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }

    public $firstRun = true;
    protected $listeners = [
        'onPointClick' => 'handleOnPointClick',
        'onSliceClick' => 'handleOnSliceClick',
        'onColumnClick' => 'handleOnColumnClick',
    ];
    public function handleOnPointClick($point)
    {
        dd($point);
    }
    public function handleOnSliceClick($slice)
    {
        dd($slice);
    }
    public function handleOnColumnClick($column)
    {
        dd($column);
    }
    public function render()
    {
        $klaim = Klaim::all()->where('rawat_inap_jiwa');
        $columnChartModel = $klaim->groupBy('tahun')
            ->reduce(
                function (ColumnChartModel $columnChartModel, $data) {
                    $year = $data->first()->tahun;
                    $rjj = $data->sum('rawat_jalan_jiwa');
                    $rij = $data->sum('rawat_inap_jiwa');
                    return $columnChartModel->multiColumn()
                        ->addSeriesColumn($year, 'Rawat Inap', $rij)
                        ->addSeriesColumn($year, 'Rawat Jalan', $rjj);
                },
                (new ColumnChartModel())
                    ->setTitle('Klaim BPJS')
                    ->setAnimated($this->firstRun)
                    ->withOnColumnClickEventName('onColumnClick')
            );
        $pieChartModel = $klaim->groupBy('tahun')
            ->reduce(
                function (PieChartModel $pieChartModel, $data) {
                    $year = $data->first()->tahun;
                    $rjj = $data->sum('rawat_jalan_jiwa');
                    $rij = $data->sum('rawat_inap_jiwa');
                    return $pieChartModel->addSlice($year, $rij, $this->colors())
                        ->addSlice($year, $rjj + $rij, $this->colors());
                },
                (new PieChartModel())
                    ->setTitle('Total Klaim BPJS')
                    ->setAnimated($this->firstRun)
                    ->withOnSliceClickEvent('onSliceClick')
            );
        $this->firstRun = false;
        return view('livewire.klaim-chart')
            ->with([
                'columnChartModel' => $columnChartModel,
                'pieChartModel' => $pieChartModel,
            ]);
    }
}
