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
            'name' => 'Elmo Montilla',
            'password' => Hash::make( 'q2e22e2q' ),
            'email' => 'elmo.montilla@gmail.com' ,
        ]);
    }
}
