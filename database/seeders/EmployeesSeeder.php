<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//ต้องเอาเข้ามาก่อน

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'fullname' => 'John Wich',
                'gender'   => 'Male',
                'email'    => 'johnwich@emai.com',
                'tel'      => '089-123-456',
                'age'      => 45,
                'address'  => '123 Soi 4578 BKK TH',
                'avatar'   => 'noavatar.jpg',
                'status'   => 1,
            ],
            [
                'fullname' => 'Somchai Jaidee',
                'gender'   => 'Male',
                'email'    => 'Somchaij@emai.com',
                'tel'      => '089-234-5678',
                'age'      => 35,
                'address'  => '486 Soi 789 BKK TH',
                'avatar'   => 'somchaij.jpg',
                'status'   => 2,
            ],
            [
                'fullname' => 'Siriwan Vadee',
                'gender'   => 'Female',
                'email'    => 'siriwanv@emai.com',
                'tel'      => '062-789-5687',
                'age'      => 35,
                'address'  => '486 Soi 789 BKK TH',
                'avatar'   => 'somchaij.jpg',
                'status'   => 2,
            ],
        ]);
    }
}
