<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Klaim;

class KlaimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('klaims')->insert([
            [
            'tahun' => 2016,
            'rawat_jalan_jiwa' => 233285,
            'rawat_inap_jiwa' => 45536,
            ],
            [
            'tahun' => 2017,
            'rawat_jalan_jiwa' => 428919,
            'rawat_inap_jiwa' => 66065,
            ],
            [
            'tahun' => 2018,
            'rawat_jalan_jiwa' => 562735,
            'rawat_inap_jiwa' => 80288,
            ],
            [
            'tahun' => 2019,
            'rawat_jalan_jiwa' => 685151,
            'rawat_inap_jiwa' => 86702,
            ]
        ]);
    }
}
