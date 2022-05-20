<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Klaim;
use Asantibanez\LivewireCharts\Models\AreaChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;

class KlaimChart extends Component
{
    // public function render()
    // {
    //     return view('livewire.klaim-chart');
    // }



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
        $klaim = Klaim::all();
        $columnChartModel = $klaim->groupBy('tahun')
            ->reduce(
                function (ColumnChartModel $columnChartModel, $data) {
                    $year = $data->first()->tahun;
                    $rjj = $data->sum('rawat_jalan_jiwa');
                    $rij = $data->sum('rawat_inap_jiwa');
                    return $columnChartModel->multiColumn()->addSeriesColumn($year, 'Rawat Jalan', $rjj)->addSeriesColumn($year, 'Rawat Inap', $rij);
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
                    return $pieChartModel->addSlice($year, $rjj + $rij, $this->colors());
                },
                (new PieChartModel())
                    ->setTitle('Total Klaim BPJS')
                    ->setAnimated($this->firstRun)
                    ->withOnSliceClickEvent('onSliceClick')
            );
        $lineChartModel = $klaim
            ->reduce(
                function (LineChartModel $lineChartModel, $data) use ($klaim) {
                    $index = $klaim->search($data);
                    $amountSum = $klaim->take($index + 1)->sum('rawat_jalan_jiwa');
                    if ($index == 6) {
                        $lineChartModel->addMarker(7, $amountSum);
                    }
                    if ($index == 11) {
                        $lineChartModel->addMarker(12, $amountSum);
                    }
                    return $lineChartModel->addPoint($index, $amountSum, ['tahun' => $data->tahun]);
                },
                (new LineChartModel())
                    ->setTitle('klaim Evolution')
                    ->setAnimated($this->firstRun)
                    ->withOnPointClickEvent('onPointClick')
                    ->setStraightCurve('stepline')
            );
        $areaChartModel = $klaim
            ->reduce(
                function (AreaChartModel $areaChartModel, $data) use ($klaim) {
                    return $areaChartModel->addPoint($data->tahun, $data->rawat_jalan_jiwa + $data->rawat_inap_jiwa, ['tahun' => $data->tahun]);
                },
                (new AreaChartModel())
                    ->setTitle('Total Klaim BPJS Samarinda')
                    ->setAnimated($this->firstRun)
                    ->setColor('#f6ad55')
                    ->withOnPointClickEvent('onAreaPointClick')
                    ->setXAxisVisible(false)
                    ->setYAxisVisible(true)
            );
        $this->firstRun = false;
        return view('livewire.klaim-chart')
            ->with([
                'columnChartModel' => $columnChartModel,
                'pieChartModel' => $pieChartModel,
                'lineChartModel' => $lineChartModel,
                'areaChartModel' => $areaChartModel,
            ]);
    }
}
