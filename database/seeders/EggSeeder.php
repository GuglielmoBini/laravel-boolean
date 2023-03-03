<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Egg;

class EggSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eggs = config("eggs");
        foreach($eggs as $egg){
            $new_egg = new Egg();
            $new_egg->fill($egg);
            $new_egg->save();
        }
    }
}