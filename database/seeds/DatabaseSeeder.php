<?php

use Illuminate\Database\Seeder;
use App\Model\Customer;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
            $customer = new Customer;
            $customer->name = str_random(10);
            $customer->nif = str_random(10);
            $customer->email = str_random(4)."@gmail.com";
            $customer->code = str_random(10);
            $customer->phone = str_random(10);
            $customer->save();
        }
    }
}
