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

        Section::create(['secName' => 'Informatique']);
        Section::create(['secName' => 'Bois']);
        Section::create(['secName' => 'Electronique']);
        
    }
}
