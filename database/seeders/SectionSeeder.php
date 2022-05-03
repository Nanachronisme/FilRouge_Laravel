<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;

use function Psy\debug;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //will run it only if 
        Section::firstOrCreate(['secName' => 'Informatique']);
        Section::firstOrCreate(['secName' => 'Bois']);
        Section::firstOrCreate(['secName' => 'Electronique']);
    }
}
