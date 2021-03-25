<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'first_name'    => 'John',
            'last_name'     => 'Smith',
            'created_at'    => Date('Y-m-d H:i:s'),
            'updated_at'    => Date('Y-m-d H:i:s'),
        ]);
    }
}
