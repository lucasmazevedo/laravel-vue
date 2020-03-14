<?php

use App\Models\Modality;
use Illuminate\Database\Seeder;

class ModalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Modality::class, 50)->create();
    }
}
