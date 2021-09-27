<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name'    =>  'alia muhammad swar',
            'email'   =>  'alia@gmail.com',
            'message' =>  'no message in your eyes sorrow',
            'subject' =>  'no massege do you marride me?'
        ]);
    }
}
