<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Domain\Customer::create([
            'name' => 'Webeleven',
            'email' => 'dev@webeleven.com.br',
            'password' => bcrypt('w11homolog')
        ]);
    }
}
