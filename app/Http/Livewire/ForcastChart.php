<?php

namespace App\Http\Livewire;

use App\Models\Klaim;
use Livewire\Component;
use Asantibanez\LivewireCharts\Models\LineChartModel;


class ForcastChart extends Component
{

    public function colors()
    {
        // return sprintf('#%06X', mt_rand(0xFF9999, 0xFFFF00));
        return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }

    public $firstRun = true;



    public function render()
    {

        $klaim = Klaim::all();
        $klaim_count = Klaim::all()->count();

        $lineChartModel = $klaim
            ->reduce(
                function (LineChartModel $lineChartModel, $data) {

                    return $lineChartModel->addSeriesPoint(
                        'Data Real',
                        $data->tahun,
                        $data->rawat_jalan_jiwa,
                        []
                    )->addSeriesPoint(
                        'Hasil Ramalan',
                        $data->tahun,
                        $data->rawat_jalan_forecast,
                        []
                    );
                },
                (new LineChartModel())
                    ->multiLine()
                    ->setTitle('Grafik Ramalan Rawat Jalan')
                    ->setAnimated($this->firstRun)
                    ->setSmoothCurve()

            );

        $lineChartModel1 = $klaim
            ->reduce(
                function (LineChartModel $lineChartModel, $data) {

                    return $lineChartModel->addSeriesPoint(
                        'Data Real',
                        $data->tahun,
                        $data->rawat_inap_jiwa,
                        []
                    )->addSeriesPoint(
                        'Hasil Ramalan',
                        $data->tahun,
                        $data->rawat_inap_forecast,
                        []
                    );
                },
                (new LineChartModel())
                    ->multiLine()
                    ->setTitle('Grafik Ramalan Rawat Inap')
                    ->setAnimated($this->firstRun)
                    ->setSmoothCurve()

            );

        $this->firstRun = false;

        return view('livewire.forcast-chart')->with([
            'lineChartModel' => $lineChartModel,
            'lineChartModel1' => $lineChartModel1,
            'klaim_count' => $klaim_count,
        ]);
    }
}
