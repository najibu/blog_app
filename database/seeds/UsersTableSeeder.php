<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          [
            'name' => 'Najibu',
            'email' => 'example@email.com',
            'password' => bcrypt('password'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
          ],
          [
            'name' => 'Nsubuga',
            'email' => str_random(12).'@email.com',
            'password' => bcrypt('password'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
          ],
          [
            'name' => 'Tech',
            'email' => str_random(12).'@email.com',
            'password' => bcrypt('password'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
          ],

        ]);
    }
}
