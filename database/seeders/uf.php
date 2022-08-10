<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class uf extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('ufs')->count() == 0){

            DB::table('ufs')->insert([

                ['sigla' => 'AC'], ['sigla' => 'AL'],
                ['sigla' => 'AP'], ['sigla' => 'AM'],
                ['sigla' => 'BA'], ['sigla' => 'CE'],
                ['sigla' => 'DF'], ['sigla' => 'ES'],
                ['sigla' => 'GO'], ['sigla' => 'MA'],
                ['sigla' => 'MT'], ['sigla' => 'MS'],
                ['sigla' => 'MG'], ['sigla' => 'PA'],
                ['sigla' => 'PB'], ['sigla' => 'PR'],
                ['sigla' => 'PE'], ['sigla' => 'PI'],
                ['sigla' => 'RJ'], ['sigla' => 'RN'],
                ['sigla' => 'RS'], ['sigla' => 'RO'],
                ['sigla' => 'RR'], ['sigla' => 'SC'],
                ['sigla' => 'SP'], ['sigla' => 'SE'],
                ['sigla' => 'TO'],
            ]);
        }
    }
}
