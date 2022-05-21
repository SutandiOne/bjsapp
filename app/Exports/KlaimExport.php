<?php

namespace App\Exports;

use App\Models\Klaim;
use Maatwebsite\Excel\Concerns\Exportable;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Events\AfterSheet;

use \Maatwebsite\Excel\Sheet;

Sheet::macro('setOrientation', function (Sheet $sheet, $orientation) {
    $sheet->getDelegate()->getPageSetup()->setOrientation($orientation);
});

class KlaimExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{

    use Exportable;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Klaim::all()->where('rawat_inap_jiwa', '!=', null);
    }

    public function headings(): array
    {
        return [
            'Tahun',
            'Rawat Jalan Jiwa',
            'Rawat Inap Jiwa'

        ];
    }

    public function map($klaim): array
    {
        return [
            $klaim->tahun,
            $klaim->rawat_jalan_jiwa,
            $klaim->rawat_inap_jiwa
        ];
    }

    public function registerEvents(): array
    {
        return [

            BeforeSheet::class => function (BeforeSheet $event) {



                $event->sheet->setCellValue('A1', 'Data Klaim BPJS Samarinda ');
                $event->sheet->setCellValue('A2', '');
            },
            AfterSheet::class => function (AfterSheet $event) {

                $event->sheet->insertNewRowBefore(1, 1);
                $event->sheet->insertNewColumnBefore('A', 1);


                $event->sheet->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);

                // All headers - set font size to 14
                $cellRange = 'A2:W2';

                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);

                // Set first row to height 20
                $event->sheet->getDelegate()->getRowDimension(1)->setRowHeight(20);
            },
        ];
    }
}
