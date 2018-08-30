<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Domain\User::create([
            'name' => 'Webeleven',
            'email' => 'dev@webeleven.com.br',
            'password' => bcrypt('w11homolog')
        ]);
    }
}
