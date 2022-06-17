<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'sana',
            'date'=>'2022/02/02',
             'email'=>'sana@gmail.com',
             'mobno'=>'98464'
        ]);
        User::create([
            'username'=>'Niranjana',
            'date'=>'2022/03/03',
             'email'=>'Niranjana@gmail.com',
             'mobno'=>'9856'
        ]);
    }
}
