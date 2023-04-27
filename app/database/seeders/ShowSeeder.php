<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Show;
use Illuminate\Support\Facades\DB;

class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shows')->insert([
            'name' =>  'Radio City Musical Hall',
            'location' => 'Copacabana Beach, Rio de Janeiro',
            'day' => 'Terça',
            'hour' => '15:30 - 19:30',
        ]);
        DB::table('shows')->insert([
            'name' =>  'Madinson Square Garden',
            'location' => 'Copacabana Beach, Rio de Janeiro',
            'day' => 'Quarta',
            'hour' => '09:00 - 22:00',
        ]);
        DB::table('shows')->insert([
            'name' =>  'Royce Hall',
            'location' => 'Copacabana Beach, Rio de Janeiro',
            'day' => 'Quinta',
            'hour' => '10:00 - 14:00',
        ]);
    }
}
