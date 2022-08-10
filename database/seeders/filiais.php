<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class filiais extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('filiais')->count() == 0){

            DB::table('filiais')->insert([

                ['nome' => 'Londrina'],
                ['nome' => 'Curtiba'],
                ['nome' => 'Campinas'],
                ['nome' => 'Joinville'],
                ['nome' => 'Porto Alegre'],
                ['nome' => 'Sao Paulo'],
                ['nome' => 'Contagem'],
                ['nome' => 'Marilia'],
                ['nome' => 'Salvador'],
                ['nome' => 'Belem'],
                ['nome' => 'Uberlandia'],
                ['nome' => 'Recife'],
                ['nome' => 'Sao Jose dos Campos'],
                ['nome' => 'Fortaleza']
            ]);
        }
    }
}