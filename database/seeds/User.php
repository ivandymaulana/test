<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
        'username' => 'Kasino',
        'email' => 'kasino@gmail.com',
        'password' => bcrypt('112233'),
        'gender' => 'Male',
        'address' => 'jl. panjang',
        'dob' => Carbon::create ('2020','08','06'),
        'role' => 'Manager'
       ]); 
    }
}
