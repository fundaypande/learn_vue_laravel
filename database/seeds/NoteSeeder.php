<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 10; $i++) {
            DB::table('notes')->insert([
                'title' => 'New Note'. $i,
                'note' => 'Hello worlds'. $i,
            ]);
        }
    }
}
