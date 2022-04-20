<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Section;
use Illuminate\Support\Facades\DB;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sections')->insert([
            [ 'secName' => 'Informatique'],
            [ 'secName' => 'Bois'],
            [ 'secName' => 'Electronique' ]
        ]);
        
    }
}
