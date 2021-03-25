<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class MessageSeeder
 * @package Database\Seeders
 */
class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'message'       => 'Stream Go coding challenge :/',
            'author_id'     => 1,
            'created_at'    => Date('Y-m-d H:i:s'),
            'updated_at'    => Date('Y-m-d H:i:s'),
        ]);
    }
}
