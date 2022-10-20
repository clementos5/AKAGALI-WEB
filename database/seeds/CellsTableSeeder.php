<?php

use Illuminate\Database\Seeder;

use Akagari\Cell;

class CellsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cell::create([
            'name' => 'Akinyambo'
		]);
        Cell::create([
            'name' => 'Kacyiru'
		]);
        Cell::create([
            'name' => 'Kicukiro'
		]);
        Cell::create([
            'name' => 'Gikondo'
		]);
    }
}
