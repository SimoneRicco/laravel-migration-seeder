<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t = new Train();
        $t->agency = "Ciaone";
        $t->start_station = "Bologna";
        $t->end_station = "Puglia";
        $t->code = 568;
        $t->n_cab = 70;
        $t->in_time = false;
        $t->agency = true;
        $t->save();
    }
}
