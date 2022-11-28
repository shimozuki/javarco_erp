<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Perusahaan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
       	'name'          => 'Admin',
       	'email'         => 'admin@admin.com',
       	'password'      => bcrypt('password'),
        'role'          => 'author',
        'perusahaan_id' => null,
        'deskripsi'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit praesentium aut tempore, atque, modi doloremque possimus pariatur ex earum dolore consequatur nisi voluptatibus delectus quam consectetur tenetur. Numquam autem iure accusamus nobis beatae voluptatibus, consequuntur.'
       ]);
    }
}
