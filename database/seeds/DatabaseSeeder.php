<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert(
            [
                'name' => 'Anh Văn',
                'phone' => '0869249714',
                'email' => 'thanthevanpm3@gmail.com',
                'avatar'=>'img2020021614591892591800.png'
            ]
        );
    }
}
