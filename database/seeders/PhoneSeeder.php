<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Phone;
class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
     //   $phone = new Phone();
    //    $phone->phone='0789859654';
     //   $phone->save();
     $phone =Phone::factory()->count(500)->create();
    }
}
